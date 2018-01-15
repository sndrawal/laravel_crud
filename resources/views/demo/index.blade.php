
          <div>
            <div>
              <div>
                  <h3> <a href="{{url('demo/create')}}">Add New Demo</a></h3>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">
                    
                    <table border='1'>
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Title</th>
                          <th>Address</th>  
                          <th>Email</th>
                          <th>price</th>
                          <th>Status</th>
                          <th>Action</th>                        
                        </tr>
                      </thead>
                       <tbody>
                     <?php
                     if(!empty($demos)):
                          foreach ($demos as $key => $value): $key = $key+1;               
                       ?>
                        <tr>
                          <td><?php echo $key; ?></td>
                          <td><?php echo $value->title; ?></td>
                          <td><?php echo $value->address; ?></td>
                          <td><?php echo $value->email; ?></td>
                          <td><?php echo $value->price; ?></td>
                          <td><?php echo ($value->status ==0) ? 'Active' : 'InActive'; ?></td>
                         
                         <td> <a href="{{url('demo/edit/'.$value->id)}}" >Edit</a> 
                          | 
                        <a href="{{url('demo/delete/'.$value->id)}}" >Delete</a> 
                            </td>                                            
                        </tr>                       
                    <?php endforeach;  else: ?>
                        <tr>
                          <td colspan ='5'>No Data Found !!!</td>
                        </tr>
                       <?php endif; ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        
       
       