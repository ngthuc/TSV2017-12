<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $titlePage; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="Hasegawa Kaito" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css"); ?>" charset="utf-8" />
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url("css/bootstrap.min.css"); ?>">
        <script type = 'text/javascript' src = "<?php echo base_url("js/bootstrap.min.js");?>"></script>
        <script language="javascript">
            function xacnhan() {
                if (!window.confirm('You want delete user ?')) {
                    return false;
                }
            }
        </script>
    </head>
    <body id="manage">
        <div id="header">
            <ul id="menu">
                <li><a href="<?php echo base_url("user"); ?>">User</a></li>
                <li><a href="#">Chuyên mục</a></li>
                <li><a href="#">Bài viết</a></li>
                <li><a href="#">Comment</a></li>
            </ul>
            <p>
                Xin chào <span><?php //echo $userName; ?></span>
                <a href="<?php echo base_url("user/logout"); ?>">[ Thoát ]</a>
            </p>
        </div><!-- End header -->
        <div id="content"><!-- =========== Begin #content ============= -->
            <?php $this->load->view($subview); ?>
        </div><!-- End #content -->
        <div id="footer">
            Copyright &copy; by Nguyen Thuc&reg;
        </div><!-- End #footer -->
    </body>
</html>
