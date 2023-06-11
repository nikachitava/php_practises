<?php
    $topics_query = "SELECT * FROM topics";
    $topics_result = mysqli_query($conn, $topics_query);

    if(isset($_POST["add_topic"])) {
        $title = $_POST['title'];
        $topic_insert = "INSERT INTO topics(title) VALUES ('$title')";
        mysqli_query($conn, $topic_insert);
        header("location:topics.php");
    }
    if(isset($_GET['delete'])) {
        $topic_id = $_GET['delete'];
        $delete_query = "DELETE FROM topics WHERE id='$topic_id'";
        mysqli_query($conn, $delete_query);
        header("location:topics.php");
    }
?>
<div class="content">
    <h3>Topics</h3>
    <div class="add">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topicModal">
        +Add Topic
        </button>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Topic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form method="post">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id">
                        <button name="add_topic" class="btn btn-primary float-right">Add</button>
                    </div>
               </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="data">
        <table id="myTable" class="display">
            
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($topics = mysqli_fetch_assoc($topics_result)){
            ?>
            <tr>
                <td><?=$topics['title']?></td>
                <td><?=$topics['created_at']?></td>
                <td><input type='hidden' value="<?=$topics['id']?>"><button class="btn btn-info" name='drop_topic' id="edit_button" href="?delete=<?=$topics["id"]?>" onclick="edit(event)">EDIT</buttton></td>
                <td><a class="btn btn-danger" name='drop_topic' href="?delete=<?=$topics["id"]?>">DELETE</a></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    let table = new DataTable('#myTable', {
        // options
    });

    let edit_button = document.getElementById('edit_button')
    function edit(e){
        let data = e.target.parentElement.parentElement.children
        let title = data[0].innerHTML
        console.log(title)
    }


</script>