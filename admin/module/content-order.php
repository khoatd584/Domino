<?php
$sql = "SELECT * FROM orders,order_detail";
$query = mysqli_query($conn, $sql);
?>
<div class="content">
    <div class="panel-header">
        <h2 class="text-white">Quản Lý Đơn Hàng</h2>
    </div>
    <div class="product-body">
        <table class="table-striped">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Thời gian giao</th>
                    <th>Ghi chú</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>PTTT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) { ?>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['name'] ?>
                        </td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['phone'] ?></td>
    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['email'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['address'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['time'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['note'] ?></td>
    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['name_pro'] ?></td>
                        <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['quantity'] ?></td>
    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['total'] ?></td>
    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $row['ship'] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>

</html>