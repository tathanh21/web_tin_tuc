    <ul>
        <li>
            <a href="../tac_gia">Quản lý tác giả</a>
        </li>
        <li>
            <a href="../ban_tin">Quản lý bản tin</a>
        </li>
        <li>
            <a href="../duyet">Quản lý duyệt tin tức</a>
        </li>
    </ul>

    <?php
    if(isset($_GET['error'])) { ?>
    <span style='color:red'>
        <?php echo $_GET['error'] ?>
    </span>
    <?php }
    ?>
    <?php
     if(isset($_GET['success'])) { ?>
    <span style='color:green'>
        <?php echo $_GET['success'] ?>
    </span>
    <?php }
    ?>