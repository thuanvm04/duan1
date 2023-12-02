<?php 
// session_start();
// if(!isset($_SESSION['payment'])) $_SESSION['payment']=[];
//            $course_id=$_POST['course_id'];
//            $course_name=$_POST['course_name'];
//            $price=$_POST['price'];
//            $kh=[$course_id,$course_name,$price];
//            $_SESSION['bill'][]=$kh;
//            var_dump($_SESSION['bill']);

?>
    <section class="breadcrumb-area">
        <div class="container5">
            <h2>Thông tin thanh toán</h2>
            <form action="index.php?action=addpayment" method="post">
                <label for="invoice_code">Học phí</label>
                <input type="text" name="price"  required><br>
                
                <label for="content">Nội dung thanh toán</label>
                <input type="text" name="content"  required><br>
                
                <label for="full_name">Tên học viên</label>
                <input type="text" name="full_name"  required><br>
                
                <label for="email">Email:</label>
                <input type="email" name="email"  required><br>

                <label for="sdt">Số điện thoại</label>
                <input type="text" name="sdt"  required><br>
                
                <input type="submit" class="submit_pay" name="submit_pay" value="Submit">
            </form>
        </div>
    </section>
