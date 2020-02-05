<?php foreach($taskList as $task){
                                            $stop_date = date('Y-m-d H:i:s', strtotime($task['TaskEndDate'] . ' +1 day'));
                                            ?>
                                            <tr <?php if(($task['TaskStatus']==2 || $task['TaskStatus']==3) && $stop_date > date('Y-m-d') ){?>  href="#" style="cursor: pointer;" data-toggle="modal" data-target="#modal_edit" data-id="<?php echo $task['TaskID']?>" <?php } else if($task['TaskStatus']==1){?>  href="#" style="cursor: pointer;" data-toggle="modal" data-target="#modal_edit_task" data-id="<?php echo $task['TaskID']?>" <?php }else {?> href="#" style="cursor: pointer;" data-toggle="modal" data-target="#modal_view" data-id="<?php echo $task['TaskID']?>" <?php }?> >
                                                <td> <?php echo $task['TaskName']?></td>
                                                <td><?php if($task['TaskType']==1) echo 'Fix';else echo 'Flexi';?></td>
                                                <td><?php if($task['TaskCategory']==1) echo 'Routine';else echo 'Non Routine';?></td>
                                                <td><?php if($task['TaskCreatedByUserID']==$task['TaskAssignToUserID']) echo 'Self Assigned';else echo $task['username'];?></td>
                                                <td><?php echo date('d /m / Y',strtotime($task['TaskCreatedAt']));?></td>
                                                <td><?php if($stop_date < date('Y-m-d') && $task['TaskStatus']!==5) echo 'Expired';else{ if($task['TaskStatus']==1) echo 'Pending for approval';elseif($task['TaskStatus']==2)echo 'Pending';elseif($task['TaskStatus']==3)echo 'In Progress';elseif($task['TaskStatus']==4) echo 'Waiting for completion';else echo 'Complete';}?></td>
                                                <!--<td><button class="btn btn-success" data-toggle="modal" data-target="#modal_view"><i class="fa fa-eye"></i></button><button class="btn btn-info" data-toggle="modal" data-target="#modal_edit"><i class="fa fa-pencil"></i></button></td>-->
                                            </tr>
                                            <?php }?>