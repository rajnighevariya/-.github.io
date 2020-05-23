<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>ધોરણ</label>
            <select name="sname">
                <option value="" selected disabled></option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentstd";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cstd']; ?></option>

              <?php } ?>
            </select>
            <!-- <input type="number" name="sname" /> -->
        </div>
        <div class="form-group">
            <label>નામ</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>મંડળ</label>
            <select name="class">
                <option value="" selected disabled></option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>મોબાઈલ નં </label>
            <input type="number" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
