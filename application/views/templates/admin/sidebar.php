<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="image">
					<a href="javascript:;"><img src="<?php echo base_url(); ?>uploads/user/<?= $this->session->userdata('user_picture'); ?>" alt="<?= $this->session->userdata('user_fullname'); ?>" /></a>
				</div>
				<div class="info">
					<?= $this->session->userdata('user_fullname'); ?>
					<small>
					<?= 
						strtoupper($this->session->userdata('user_rules')); 
					?>
					</small>
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header">Navigation</li>
			<?php
				switch ($this->session->userdata('user_rules')) {
					case 'super_admin':
					    $main=$this->db->query("SELECT * FROM menu WHERE parent = 0 ORDER BY posisi ASC");
						break;

					case 'admin':
					    $main=$this->db->query("SELECT * FROM menu WHERE parent = 0 AND rules != 'super_admin'  ORDER BY posisi ASC");
						break;
					
					default:
					    $main=$this->db->query("SELECT * FROM menu WHERE parent = 0 AND rules = 'registered_user'  ORDER BY posisi ASC");
						break;
				}
			    foreach ($main->result() as $m)
			    {
			        // chek ada submenu atau tidak
    				switch ($this->session->userdata('user_rules')) {
						case 'super_admin':
					        $sub=$this->db->get_where('menu',array('parent'=>$m->id));
							break;

						case 'admin':
						    $sub=$this->db->query("SELECT * FROM menu WHERE parent = $m->id AND rules != 'super_admin'  ORDER BY posisi ASC");
							break;
						
						default:
						    $sub=$this->db->query("SELECT * FROM menu WHERE parent = $m->id AND rules = 'registered_user'  ORDER BY posisi ASC");
							break;
					}
			        if($sub->num_rows() >0)
			        {
			            // buat menu + sub menu
			            echo "<li class=\"has-sub\">
								<a href=\"javascript:;\">
								    <b class=\"caret pull-right\"></b>
								    <i class=\"fa $m->icon\"></i>
								    <span>$m->nama_menu</span>
							    </a>
								<ul class=\"sub-menu\">";
			            foreach ($sub->result() as $s)
			            {
			                 echo '<li>'.anchor($s->link, $s->nama_menu).'</li>';
			            }
			            echo "</ul>";
			            echo '</li>';
			        }
			        else
			        {
			            // single menu
			            echo '<li>'.anchor($m->link,'<i class="'.$m->icon.' fa-lg">
			                 </i>  <span class="menu-text">'.$m->nama_menu.'</span>').'</li>';
			        }
			    }
			?>
	        <!-- begin sidebar minify button -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
	        <!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->