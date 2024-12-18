<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li class="<?= ($_REQUEST['page']=='dashboard')? 'mm-active':null ?>">
            <a href="index.php?page=dashboard" class="<?= ($_REQUEST['page']=='dashboard')? 'active':null ?>">
                <i class="fe-airplay"></i>
                <span> Dashboard </span>
            </a>
        </li>

        <li class="
            <?php 
                if(
                    $_REQUEST['page'] == 'data-kategori' || 
                    $_REQUEST['page'] == 'form-kategori'
                ){
                    echo "mm-active";
                }
            ?>
        ">
            <a href="javascript: void(0);" class="
                <?php 
                    if(
                        $_REQUEST['page'] == 'data-kategori' || 
                        $_REQUEST['page'] == 'form-kategori'
                    ){
                        echo "active";
                    }
                ?>
            ">
                <i class="fe-briefcase"></i>
                <span> Kategori </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="<?= ($_REQUEST['page']=='data-kategori')? 'mm-active':null ?>">
                    <a href="index.php?page=data-kategori" class="<?= ($_REQUEST['page']=='data-kategori')? 'active':null ?>">Data Kategori</a>
                </li>
                <li class="<?= ($_REQUEST['page']=='form-kategori')? 'mm-active':null ?>">
                    <a href="index.php?page=form-kategori" class="<?= ($_REQUEST['page']=='form-kategori')? 'active':null ?>">Form Kategori</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="fe-briefcase"></i>
                <span> Penerbit </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="index.php?page=data-penerbit">Data Penerbit</a></li>
                <li><a href="index.php?page=form-penerbit">Form Penerbit</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);">
                <i class="fe-briefcase"></i>
                <span> Buku </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="index.php?page=data-buku">Data Buku</a></li>
                <li><a href="index.php?page=form-buku">Form Buku</a></li>
            </ul>
        </li>

    </ul>

</div>