<div class="container">
            <center>
                <h1>Todo list</h1>
            </center>
            
                <hr><br>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">add task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="">task name</label>
                <input type="text" required name="task" class="form-control">
            </div>
            <input type="submit" name="send" value="send" class="btn btn-primary">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top:70px;">
    <div class="col-md-10 col-md-offset-1">


                <table class="table">

                    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"  class="btn btn-success" >Add task</button>

            <button class="btn btn-default float-end " type="button">print</button>
            <div class="col-md-10 col-md-offset-1">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
        
                          
                          <th scope="row">1</th>
                            <td class="col-md-10">Mark</td>
                            <td><a href="" class="btn btn-success">Edit</a></td>
                            <td><a href="" class="btn btn-danger">delete</a></td>

                        </tr>




                    </tbody>
                </table>
            </div>

        </div>

    </div>