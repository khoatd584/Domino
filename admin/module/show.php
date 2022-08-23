<?php
if(isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page*5)-5;
}
$sql = "SELECT * FROM news ORDER BY news.news_id DESC LIMIT $begin,5";
$query = mysqli_query($conn, $sql); 
?>
<div class="content">
    <div class="panel-header">
        <h2 class="text-white">Quản Lý Sản Phẩm</h2>
        <a href="index.php?page=creat" class="btn-secondary">Thêm Sản Phẩm</a>
    </div>

    <div class="product-body">
        <table class="table-striped">
            <thead>
                <tr class="odd">
                    <!-- <th>Code</th> -->
                    <th>Name</th>
                    <th>Image</th>
                    <th>Ingredient</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['news_name'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;">
                            <img class="table-striped-img" src="image/<?= $row['news_image'] ?>">
                        </td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['news_ingredient'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['news_price'] ?>đ</td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['news_quantity'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;">
                            <a class="fix" href="index.php?page=edit&id=<?= $row['news_id'] ?>">Edit</a>
                        </td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;">
                            <a class="dalete" onclick="return confirm('Are you sure you will delete the product?')" href="index.php?page=delete&id=<?= $row['news_id'] ?>">Delete</a>
                        </td>

                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <?php 
            $sql_trang = mysqli_query($conn,"SELECT * FROM news");
            $row_count = mysqli_num_rows($sql_trang);
            $trang = ceil($row_count/5);
            ?>
        <ul class="list">
            <?php
            for($i=1; $i <= $trang; $i++) {

            ?>
            <li <?php if($i == $page) { echo 'style="background-color: #1572e8;color: #fff;"';} else {echo '';} ?> class="list-item"><a <?php if($i == $page) { echo 'style="color: #fff;"';} else {echo '';} ?> href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>

</html>