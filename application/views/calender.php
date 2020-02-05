
<?php
class Employee_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }
    
    /**
    * Get page by his is
    * @param int $page_id 
    * @return array
    */
    
    public function store_selftask($data)
    {
        $insert = $this->db->insert('tbl_tasks', $data);
        return $this->db->insert_id();
    }
     public function store_timesheet($data)
    {
        $insert = $this->db->insert('tbl_tasksubmits', $data);
        return $this->db->insert_id();
    }
     public function timesheet($user_id,$date,$department_id){
        
         $is_created=date('Y-m-d H:i:s');
         $query= $this->db->query("select * from tbl_timesheet where submit_user_id='".$user_id."' and submit_date='".$date."' ");
                    if($query->num_rows() > 0){
                          return true;
                    }
                    else{
                          $lineitems=$this->db->query("INSERT INTO tbl_timesheet (department_id,submit_user_id,submit_date,timesheet_status,is_manager,created_at) VALUES  ('".$department_id."','".$user_id."','".$date."','0','0','".$is_created."')");
                           return true;
                         
                      }
     }
    public function store_tasksubmit($data)
    {
        $insert = $this->db->insert('tbl_tasksubmits', $data);
        return $this->db->insert_id();
    }
    public function updatetask($data,$id)
    {
        $this->db->where('TaskID',$id);
        $this->db->update('tbl_tasks',$data);
    }
    public function updateleavestatus($data,$id)
    {
        $this->db->where('LeaveUserID',$id);
        $this->db->update('tbl_leaves',$data);
    }
    public function getalltaskassign($user_id,$type="",$limit="")
    {
        $this->db->select('T.*,U.username,d.department_name,Us.username as AssignUserName'); 
        $this->db->from('tbl_tasks T');
        $this->db->join('users U','U.id=T.TaskCreatedByUserID');
         $this->db->join('users Us','Us.id=T.TaskAssignToUserID');
        $this->db->join('tbl_department d','d.id=T.TaskDepartmentID');
        $this->db->where('T.TaskAssignToUserID',$user_id);
        $this->db->where('T.Deleted',1);
        if($type!='')
        $this->db->where('T.TaskType',$type);
        $this->db->order_by('T.TaskCreatedAt','ASC');
        //$this->db->order_by('T.TaskStatus','ASC');
        if($limit!='')
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function getalltaskcreate($user_id,$type="",$limit="")
    {
        $this->db->select('T.*,U.username,Us.username as AssignUserName,d.department_name'); 
        $this->db->from('tbl_tasks T');
        $this->db->join('users U','U.id=T.TaskCreatedByUserID');
         $this->db->join('users Us','Us.id=T.TaskAssignToUserID');
        $this->db->join('tbl_department d','d.id=T.TaskDepartmentID');
        $this->db->where('T.TaskCreatedByUserID',$user_id);
        $this->db->where('T.Deleted',1);
        $this->db->order_by('T.TaskID','DESC');
        //$this->db->order_by('T.TaskStatus','ASC');
        if($limit!='')
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function getAllTasksLimit($user_id,$type="")
    {
        $this->db->select('T.*,U.username,d.department_name'); 
        $this->db->from('tbl_tasks T');
        $this->db->join('users U','U.id=T.TaskCreatedByUserID');
         $this->db->join('tbl_department d','d.id=T.TaskDepartmentID');
       /* $this->db->where('T.TaskCreatedByUserID',$user_id);*/
        $this->db->where('T.TaskAssignToUserID',$user_id);
        $this->db->where('T.Deleted',1);
        if($type!='')
        $this->db->where('T.TaskType',$type);
        $this->db->order_by('T.TaskCreatedAt','ASC');
        $this->db->limit(5);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function getAllTasks($user_id)
    {
        $this->db->select('T.*,U.username'); 
        $this->db->from('tbl_tasks T');
        $this->db->join('users U','U.id=T.TaskCreatedByUserID');
        $this->db->where('T.TaskAssignToUserID',$user_id);
       
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getalltimesheet($user_id,$limit=""){
        $this->db->select('T.*,U.username,Ts.*'); 
        $this->db->from('tbl_tasksubmits T');
        $this->db->join('users U','U.id=T.TaskSubmitUserID');
        $this->db->join('tbl_tasks Ts','Ts.TaskID=T.TaskSubmitTaskID');
        $this->db->where('T.TaskSubmitUserID',$user_id);
         $this->db->where('T.Deleted',1);
        // if($type!='')
        // $this->db->where('T.TaskType',$type);
        $this->db->order_by('T.TaskSubmitUserID','ASC');
        //$this->db->order_by('T.TaskStatus','ASC');
        if($limit!='')
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();  
    }
    public function getTaskDetailsByTaskID($TaskID)
    {
      
        $this->db->select('*,u.username as AssignUserName, US.username as CreateTaskUsername,d.* ,DATE_FORMAT(T.TaskStartTime,"%H:%i:%s %p") as TaskStartTime,DATE_FORMAT(T.TaskEndTime,"%H:%i:%s %p") as TaskEndTime,DATE_FORMAT(T.TaskStartDate,"%d %M %Y") as TaskStartDate,DATE_FORMAT(T.TaskEndDate,"%d %M %Y") as TaskEndDate,(select SEC_TO_TIME(SUM(UNIX_TIMESTAMP(TaskSubmitEndTime) - UNIX_TIMESTAMP(`TaskSubmitStartTime`))) from tbl_tasksubmits where `TaskSubmitTaskID`=T.TaskID and Deleted=1) as TimeSubmitted,TIMEDIFF(DATE_FORMAT(T.TaskEndTime,"%H:%i:%s A"),  DATE_FORMAT(T.TaskStartTime,"%H:%i:%s A")) as timediffrence, TIMEDIFF("19:00:00",  DATE_FORMAT(T.TaskStartTime,"%H:%i:%s A")) as starttime ,TIMEDIFF(DATE_FORMAT(T.TaskEndTime,"%H:%i:%s A"),"10:00:00" ) as endtime , DATEDIFF(T.TaskEndDate, T.TaskStartDate) as daystotal'); 
        $this->db->from('tbl_tasks T');
        $this->db->join('tbl_heads H','H.headID=T.TaskHeadID');
        $this->db->join('tbl_department d','d.id=T.TaskDepartmentID');
        $this->db->join('users u','u.id=T.TaskAssignToUserID');
        $this->db->join('users US','US.id=T.TaskCreatedByUserID');
        $this->db->join('tbl_activities A','A.ActivityID=T.TaskActivityID');
        $this->db->where('T.TaskID',$TaskID);
        $query=$this->db->get();
        return $query->result_array();
    }
    
     public function getDetailsByTaskSubmitID($TaskSubmitID)
    {
        $this->db->select('T.*,U.username,Ts.*'); 
        $this->db->from('tbl_tasksubmits T');
        $this->db->join('users U','U.id=T.TaskSubmitUserID');
        $this->db->join('tbl_tasks Ts','Ts.TaskID=T.TaskSubmitTaskID');
        $this->db->where('T.TaskSubmitID',$TaskSubmitID);
         $this->db->where('T.Deleted',1);
        $this->db->order_by('T.TaskSubmitUserID','ASC');
        $query=$this->db->get();
        return $query->result_array();
    }
    
    public function store_coffecorner($data)
    {
        $insert = $this->db->insert('tbl_coffecorner', $data);
        return $this->db->insert_id();
    }
     public function store_todo($data)
    {
        $insert = $this->db->insert('tbl_todo', $data);
        return $this->db->insert_id();
    }
    
    public function get_to_do($limit="")
    {
        $this->db->select('*'); 
        $this->db->from('tbl_todo C');
        $this->db->join('users U','U.id=C.user_id');
        $this->db->where('C.status',1);
          $this->db->where('C.Deleted',1);
        $this->db->where('C.user_id',$this->session->userdata('user_id'));
        if($limit!='')
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getcoffeecorner($limit="")
    {
        $this->db->select('*'); 
        $this->db->from('tbl_coffecorner C');
        $this->db->join('users U','U.id=C.CoffeCornerUserID');
        $this->db->where('C.CoffeCornerStatus',1);
        $this->db->or_where('U.id',$this->session->userdata('user_id'));
        if($limit!='')
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function get_timesheet($user_id)
    {
       
        $this->db->select('D.department_name,A.*,u.username,(select ROUND(SUM(TIME_TO_SEC(TIMEDIFF(TaskSubmitEndTime, TaskSubmitStartTime))/3600))  from tbl_tasksubmits where  TaskSubmitUserID="'.$user_id.'" and A.submit_date=TaskSubmitDate) as TimeSubmit,(select ROUND(SUM(TIME_TO_SEC(TIMEDIFF(TaskSubmitEndTime, TaskSubmitStartTime))/3600))  from tbl_tasksubmits where  TaskSubmitUserID="'.$user_id.'" and Submission_status=3 and A.submit_date=TaskSubmitDate) as TimeSubmitapprov,(select ROUND(SUM(TIME_TO_SEC(TIMEDIFF(TaskSubmitEndTime, TaskSubmitStartTime))/3600))  from tbl_tasksubmits where  TaskSubmitUserID="'.$user_id.'" and Submission_status=5 and A.submit_date=TaskSubmitDate) as TimeSubmitdisapprov'); 
        $this->db->from('tbl_timesheet A');
        $this->db->join('tbl_department D','D.id=A.department_id');
        $this->db->join('users u','u.id=A.submit_user_id');
        $this->db->where('A.submit_user_id',$user_id);
        $this->db->order_by('A.submit_date','DESC');
        
        $query=$this->db->get();
        return $query->result_array();
    }
     public function get_timesheet_limit($user_id)
    {
        $this->db->select('D.department_name,A.*,u.username'); 
        $this->db->from('tbl_timesheet A');
        $this->db->join('tbl_department D','D.id=A.department_id');
        $this->db->join('users u','u.id=A.submit_user_id');
        $this->db->where('A.submit_user_id',$user_id);
        $this->db->order_by('A.submit_date','DESC');
        $this->db->limit(5);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function get_directory_manager($user_id)
    {
        $sql="select D.*,U.username from tbl_directory D, users U where D.User_id=U.id and D.Deleted=1 and D.status=1 and   D.department_id IN (select DepartmentID from tbl_departmentemploy where EmployID='".$user_id."') order by D.DirectoryID DESC";
        $query=$this->db->query($sql);
         return $query->result_array();
    }
    public function get_attendance_manager($user_id)
    {
        $sql="select A.*,DATE_FORMAT(A.signin_time,'%d %M %Y %h %i %p') as signin_time,DATE_FORMAT(A.signout_time,'%d %M %Y %h %i %p') as signout_time ,U.username, D.department_name from tbl_attendance A,tbl_department D , users U where A.User_id=U.id and A.department_id=D.id and   A.department_id IN (select DepartmentID from tbl_departmentemploy where EmployID='".$user_id."') order by A.attendance_id DESC Limit 5";
        $query=$this->db->query($sql);
         return $query->result_array();
    }
     public function get_directory($user_id)
    {
        $this->db->select('D.department_name,A.*'); 
        $this->db->from('tbl_directory A');
        $this->db->join('tbl_department D','D.id=A.Department_id');
        $this->db->where('A.User_id',$user_id);
        $this->db->where('A.Deleted',1);
        $this->db->order_by('A.DirectoryID','DESC');
        
        $query=$this->db->get();
        return $query->result_array();
    }

     public function getDirectoryDetailsByID($DirectoryID)
    {
        $this->db->select('D.department_name,A.*'); 
        $this->db->from('tbl_directory A');
        $this->db->join('tbl_department D','D.id=A.Department_id');
        $this->db->where('A.DirectoryID',$DirectoryID);
        $this->db->order_by('A.DirectoryID','DESC');
        
        $query=$this->db->get();
        return $query->result_array();
    }
     public function gettimesheet($limit="5")
    {
        $this->db->select('*'); 
        $this->db->from('tbl_tasksubmits C');
        $this->db->join('users U','U.id=C.TaskSubmitUserID');
        // $this->db->where('C.status',1);
        $this->db->or_where('U.id',$this->session->userdata('user_id'));
        $this->db->order_by('C.TaskSubmitID','Desc');
        if($limit='5')
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getCoffeecornerDetailsByID($CoffeCornerID)
    {
        $this->db->select('*,DATE_FORMAT(C.CoffeCornerCreatedDate,"%d / %m / %Y") as CoffeCornerCreatedDate'); 
        $this->db->from('tbl_coffecorner C');
        $this->db->join('users U','U.id=C.CoffeCornerUserID');
        $this->db->where('C.CoffeeCornerID',$CoffeCornerID);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function get_todo_details($ToDoID)
    {
        $this->db->select('*,DATE_FORMAT(C.is_created,"%d / %m / %Y") as is_created'); 
        $this->db->from('tbl_todo C');
        $this->db->join('users U','U.id=C.user_id');
        $this->db->where('C.ToDoID',$ToDoID);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function update_coffecorner($data,$id)
    {
        $this->db->where('CoffeeCornerID',$id);
        $this->db->update('tbl_coffecorner',$data);
    }
     public function update_todo($data,$ToDoID)
    {
        $this->db->where('ToDoID',$ToDoID);
        $this->db->update('tbl_todo',$data);
    }
    
    
    public function get_bulletinboard($limit="")
    {
        $this->db->select('*,'); 
        $this->db->from('tbl_bulletinboard B');
        $this->db->join('users U','U.id=B.BulletinUserID');
        $this->db->where('B.BulletinStatus',1);
        if($limit!="")
        $this->db->limit($limit);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getbulletinDetailsByID($BulletinID)
    {
       $this->db->select('*,DATE_FORMAT(B.BulletinCreatedDate,"%d / %m / %Y") as BulletinCreatedDate'); 
        $this->db->from('tbl_bulletinboard B');
        $this->db->join('users U','U.id=B.BulletinUserID');
        $this->db->where('B.BulletinID',$BulletinID);
        $query=$this->db->get();
        return $query->result_array(); 
    }
    
    public function get_myleaves($id)
    {
        $this->db->select('*,DATE_FORMAT(L.LeaveStartDate,"%d  %M  %Y") as LeaveStartDate,DATE_FORMAT(L.LeaveEndDate,"%d %M %Y") as LeaveEndDate'); 
        $this->db->from('tbl_leaves L');
        $this->db->where('L.Deleted',1);
        //$this->db->join('users U','U.id=B.BulletinUserID');
        $this->db->where('L.LeaveUserID',$id);
        
        $query=$this->db->get();
        return $query->result_array();
    }

     public function get_myleaves_limit($id)
    {
        $this->db->select('*,DATE_FORMAT(L.LeaveStartDate,"%d  %M  %Y") as LeaveStartDate,DATE_FORMAT(L.LeaveEndDate,"%d %M %Y") as LeaveEndDate'); 
        $this->db->from('tbl_leaves L');
        $this->db->where('L.Deleted',1);
        //$this->db->join('users U','U.id=B.BulletinUserID');
        $this->db->where('L.LeaveUserID',$id);
        
        $this->db->limit(5);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function store_leaves($data)
    { 
        $insert = $this->db->insert('tbl_leaves', $data);
        return $this->db->insert_id();
    }
    public function get_ajax_tasks($category='',$type='',$assigned='',$status='',$DateFrom='',$DateTo='')
    {
        $this->db->select('T.*,U.username'); 
        $this->db->from('tbl_tasks T');
        $this->db->join('users U','U.id=T.TaskCreatedByUserID');
        $this->db->where('T.TaskAssignToUserID',$this->session->userdata('user_id'));
        $this->db->where('T.Deleted',1);
        if($category!='')
        $this->db->where('T.TaskCategory',$category); 
        if($type!='')
        $this->db->where('T.TaskType',$type);
        if($DateFrom!='' && $DateTo!='' ){
        $this->db->where('DATE_FORMAT(T.TaskCreatedAt,"%Y-%m-%d") >=', date('Y-m-d',strtotime($DateFrom)));
        $this->db->where('DATE_FORMAT(T.TaskCreatedAt,"%Y-%m-%d") <=', date('Y-m-d',strtotime($DateTo)));   
        }
        if($assigned!='' && $assigned==0 )
        $this->db->where('T.TaskCreatedByUserID',$this->session->userdata('user_id'));
        else if($assigned!='')
        $this->db->where('T.TaskCreatedByUserID',$assigned);
        else if($status!='' ){
          if($status==5) { 
           $this->db->where('T.TaskEndDate <',date('Y-m-d',strtotime("-1 days")));
           $this->db->where('T.TaskStatus !=',5);
          }
          else{
            $this->db->where('T.TaskEndDate >=',date('Y-m-d',strtotime("-1 days")));
            $this->db->where('T.TaskStatus',$status);  
          }
        }
        $this->db->order_by('T.TaskCreatedAt','ASC');
        $query=$this->db->get();
        return $query->result_array();
    }
     public function getleaveDetailsByID($LeaveID)
    {
        $this->db->select('*,DATE_FORMAT(L.LeaveStartDate,"%d  %M  %Y") as LeaveStartDate,DATE_FORMAT(L.LeaveEndDate,"%d  %M %Y") as LeaveEndDate'); 
        $this->db->from('tbl_leaves L');
       // $this->db->join('users U','U.id=B.BulletinUserID');
        $this->db->where('L.LeaveID',$LeaveID);
        $query=$this->db->get();
        return $query->result_array(); 
    }
    
    public function get_myExpence($user_id)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_expense E');
       // $this->db->join('tbl_heads H','H.HeadID=E.ExpenseHeadID');
        $this->db->where('E.ExpenseUserID',$user_id);
        $this->db->where('E.ExpenseStatus',1);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function store_expense($data)
    {
        $insert = $this->db->insert('tbl_expense', $data);
        return $this->db->insert_id();
    }
    public function getexpenseDetailsByID($ExpenseID)
    {
        $this->db->select('E.*,DATE_FORMAT(E.ExpenseDate,"%d / %m / %Y") as sExpenseDate,H.HeadName,U.username'); 
        $this->db->from('tbl_expense E');
        $this->db->join('tbl_heads H','H.HeadID=E.ExpenseHeadID');
        $this->db->join('users U','U.id=E.ExpenseUserID');
        $this->db->where('E.ExpenseID',$ExpenseID);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function get_ajax_expense($type='',$DateFrom='',$DateTo='')
    {
        $this->db->select('E.*,U.username,H.HeadName,U.username'); 
        $this->db->from('tbl_expense E');
        $this->db->join('tbl_heads H','H.HeadID=E.ExpenseHeadID');
        $this->db->join('users U','U.id=E.ExpenseUserID');
        if($type!='')
        $this->db->where('E.ExpenseType',$type);
        if($DateFrom!='' && $DateTo!='' ){
        $this->db->where('DATE_FORMAT(E.ExpenseDate,"%Y-%m-%d") >=', date('Y-m-d',strtotime($DateFrom)));
        $this->db->where('DATE_FORMAT(E.ExpenseDate,"%Y-%m-%d") <=', date('Y-m-d',strtotime($DateTo)));   
        }
        $this->db->order_by('E.ExpenseCreatedAt','ASC');
        $query=$this->db->get();
        return $query->result_array();
    }
    public function countMyTask($status)
    {
        $this->db->select('*');
        $this->db->from('tbl_tasks T');
        $this->db->where('T.TaskAssignToUserID',$this->session->userdata('user_id'));
        $this->db->where('T.TaskStatus',$status);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function totaltimeassigned()
    {
         $sql = "select ROUND(SUM(TIME_TO_SEC(TIMEDIFF(TaskEndTime, TaskStartTime))/3600) ) as TimeAssigned from tbl_tasks where TaskAssignToUserID='".$this->session->userdata('user_id')."'";
         $query=$this->db->query($sql);
         return $query->result_array();
    }
     public function totaltimeassignedflexi()
    {
         $sql = "select SUM(TaskTimeAlloted) as TaskTimeAlloted from tbl_tasks where TaskAssignToUserID='".$this->session->userdata('user_id')."'";
         $query=$this->db->query($sql);
         return $query->result_array();
    }
    public function totaltimesubmitted()
    {
         $sql = "select ROUND( SUM( TIME_TO_SEC(TIMEDIFF(TaskSubmitEndTime, TaskSubmitStartTime))/3600) ) as TimeSubmit from tbl_tasksubmits where  TaskSubmitUserID='".$this->session->userdata('user_id')."'";
         $query=$this->db->query($sql);
         return $query->result_array();
    }
    public function getSearchEmployee($serchname,$deprtment_id)
    {
        $this->db->select('U.*');
        $this->db->from('users U');
        $this->db->join('tbl_departmentemploy DE','DE.EmployID=U.id','LEFT');
        $this->db->where('U.UserType',3);
        $this->db->where('DE.DepartmentID',$deprtment_id);
        $this->db->where('U.id !=',$this->session->userdata('user_id'));
        $this->db->like('U.username', $serchname, 'after');
        $query = $this->db->get();
        return $query->result();
    }
    public function update_selftask($data,$id)
    {
        $this->db->where('TaskID',$id);
        $this->db->update('tbl_tasks', $data);
    }
    public function delete_task($id)
    {
        $this->db->where('TaskID',$id);
        if($this->db->delete('tbl_tasks'))
         {
            return true;
        }else{
            return false;
        }
    }
    public function delete_timesheet($id)
    {
        $this->db->where('TaskSubmitID',$id);
        if($this->db->delete('tbl_tasksubmits'))
         {
            return true;
        }else{
            return false;
        }
    }
    
     public function getTimeSubmittedByTaskID($id)
    {

        $this->db->select('*,TIMEDIFF(DATE_FORMAT(TaskSubmitEndTime,"%H:%i:%s A"), DATE_FORMAT(TaskSubmitStartTime,"%H:%i:%s A")) as TotalTimetask');
        $this->db->from('tbl_tasksubmits');
        $this->db->where('TaskSubmitTaskID',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
     public function line_items_taskid($id, $limit="2")
    {

        $this->db->select('*,TIMEDIFF(DATE_FORMAT(TaskSubmitEndTime,"%H:%i:%s A"), DATE_FORMAT(TaskSubmitStartTime,"%H:%i:%s A")) as TotalTimetask');
        $this->db->from('tbl_tasksubmits');
        $this->db->where('TaskSubmitTaskID',$id);
         if($limit!="")
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getallTimeSubmitted($id)
    {

        $this->db->select('*,TIMEDIFF(DATE_FORMAT(TaskSubmitEndTime,"%H:%i:%s A"), DATE_FORMAT(TaskSubmitStartTime,"%H:%i:%s A")) as Timetask');
        $this->db->from('tbl_tasksubmits');
        $this->db->where('TaskSubmitUserID',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_task_by_id($task_id){
        $this->db->select('*');
        $this->db->from('tbl_tasks');
        $this->db->where('TaskID',$task_id);
         $query = $this->db->get();
        return $query->result_array();
    }
    public function getTimesheetByID($timesheet_id)
    {

        $this->db->select('C.*,U.username,D.department_name'); 
        $this->db->from('tbl_timesheet C');
        $this->db->join('users U','U.id=C.submit_user_id');
        $this->db->join('tbl_department D','D.id=C.department_id');
        $this->db->where('C.timesheet_id',$timesheet_id);
        $query=$this->db->get();
        return $query->result_array();
    }
     public function getlineitemsDetailsByID($TaskSubmitID)
    {
       $this->db->select('T.TaskName,T.TaskCategory,L.*,DATE_FORMAT(L.TaskSubmitStartTime,"%H:%i:%s %p") as StartTime,DATE_FORMAT(L.TaskSubmitEndTime,"%H:%i:%s %p") as EndTime,DATE_FORMAT(L.TaskSubmitDate,"%d  %M  %Y") as TaskSubmitDate,U.username,D.department_name'); 
        $this->db->from('tbl_tasksubmits L');
        $this->db->join('users U','U.id=L.TaskSubmitUserID');
        $this->db->join('tbl_tasks T','T.TaskID=L.TaskSubmitTaskID');
         $this->db->join('tbl_department D','D.id=L.department_id');
        $this->db->where('L.TaskSubmitID',$TaskSubmitID);
        $query=$this->db->get();
        return $query->result_array(); 
    }

    public  function  gettaskcomments($TaskID){
         /*$this->db->select('C.*,U.username');
         $this->db->from('tbl_task_comments C');
         $this->db->join('users U,U.id=C.user_id');
         $this->db->where('C.task_id',$task_id);
         $query=$this->db->get();*/
         $sql="select * from tbl_task_comments where   task_id='".$TaskID."'";
        $query=$this->db->query($sql);
         return $query->result_array();
    }


      
   /*  public function auto_update(){
        $now=date('Y-m-d H:i:s');
        $query= $this->db->query("UPDATE tbl_tasks SET TaskStatus ='3'
    WHERE TaskStartTime >= NOW() AND TaskStatus='2'");
        return true;
    }*/
}
