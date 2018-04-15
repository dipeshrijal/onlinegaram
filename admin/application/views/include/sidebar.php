<aside>
    <div id="sidebar"  class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="<?php echo base_url();?>home/members_area">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>            
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-laptop"></i>
                    <span>Category</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url();?>category/add_category">Add Category</a></li>
                    <li><a  href="<?php echo base_url();?>category/view_category">View Category</a></li>
                </ul>
            </li> 
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-laptop"></i>
                    <span>Sub-Category</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url();?>subcategory/add_sub_category">Add Sub-Category</a></li>
                    <li><a  href="<?php echo base_url();?>subcategory/view_sub_category">View Sub-Category</a></li>
                </ul>
            </li> 
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-laptop"></i>
                    <span>Product</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url();?>product/add_product">Add Product</a></li>
                    <li><a  href="<?php echo base_url();?>product/add_image">Add Image</a></li>
                    <li><a  href="<?php echo base_url();?>product/view_product">View Product</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>