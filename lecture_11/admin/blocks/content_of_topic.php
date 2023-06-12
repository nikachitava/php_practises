<?php
    $topics_query = "SELECT * FROM topics";
    $topics_result = mysqli_query($conn, $topics_query);
    if(isset($_POST['butt_topic'])){
        $id = $_POST['id'];
        $title  = $_POST['title'];
        if($id==""){
            $topic_insert = "INSERT INTO topics(title) VALUES ('$title')";
            mysqli_query($conn, $topic_insert);
            header("location:topics.php");
        }else{
            $topic_update = "UPDATE topics SET title='$title' WHERE id='$id'";
            mysqli_query($conn, $topic_update);
            header("location:topics.php");
        }
    }

    if(isset($_GET['drop'])){
        $topic_id = $_GET['drop'];
        $topic_drop_query = "DELETE FROM topics WHERE id='$topic_id'";
        mysqli_query($conn, $topic_drop_query);
        header("location:topics.php");
    }

?>
<div class="content">
    <h3>Topics</h3>
    <div class="add">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topicModal" onclick="add()">
        +Add Topic
        </button>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Topic</h5>
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
                        <button name="butt_topic" class="btn btn-primary float-right">Add</button>
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
                <td><input type="hidden" value="<?=$topics['id']?>"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#topicModal" onclick="edit(event)">EDIT</button></td>
                <td><a href="?drop=<?=$topics['id']?>"><button type="button" class="btn btn-danger">DROP</button></a></td>
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

    function add(){
        document.getElementById('exampleModalLabel').innerHTML = "Add New TOpic";
        document.querySelector('input[name="title"]').value = "";
        document.querySelector('button[name="butt_topic"]').innerHTML = "Add";
        document.querySelector('input[name="id"]').value = "";
    }

    function edit(e){
        var data = e.target.parentElement.parentElement.children;
        document.querySelector('input[name="title"]').value = data[0].innerHTML;
        document.getElementById('exampleModalLabel').innerHTML = "Edit Topic";
        document.querySelector('button[name="butt_topic"]').innerHTML = "Edit";
        document.querySelector('input[name="id"]').value = e.target.previousSibling.value;
    }

</script>