<div class="center-heading">Edit Profile</div>

<div id="page">

  <div class="header">

    <div class="footer">

      <div class="body">

        <div id="sidebar">

          <ul class="navigation">
           <li><?php echo anchor('user/edit_profile','Account Info','title="accountInfo_view"'); ?></li>
           <li><?php echo anchor('user/favorites','Favourites','title="favorites"'); ?></li>
           <li><?php echo anchor('user/uploaded','Uploaded Recipes','title="view_uploaded"'); ?></li>
         </ul>
        </div> <!-- end of sidebar -->

        <div id="content">
          <div class="content">

          <!-- Form name -->
          <table class='profile-table'>
            <tr>
              <td>Name</td>
              <td>
                <?php
                echo $this->session->userdata('user')->first_name;
                echo " ";
                echo $this->session->userdata('user')->last_name;
                ?>
              </td>
              <td><a href="#" onclick='displayForm("form_name"); return false;'>Edit</a></td>
            </tr>
          </table>

          <table class="edit-hidden" id="form_name" style="display:none;">
            <form method="post" action="<?php echo base_url(); ?>index.php/user/update_profile/form_name" autocomplete="off">
              <tr>
                <td><label>First Name</label></td>
                <td><input name="first_name" value="<?php echo set_value('first_name'); ?>" type="text" autocomplete="off"/></td>
              </tr>
              <tr>
                <td><label>Last Name</label></td>
                <td><input name="last_name" value="<?php echo set_value('last_name'); ?>" type="text" autocomplete="off"/></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_name');"/>
                </td>
              </tr>
            </form>
          </table>

          <!-- Form Email -->
          <table class='profile-table'>
            <tr>
              <td>Email Address</td>
              <td><?php echo $this->session->userdata('user')->email_address; ?></td>
              <td><a href="#" onclick='displayForm("form_email"); return false;'>Edit</a></td>
            </tr>
          </table>

          <table class="edit-hidden" id="form_email" style="display:none;">
            <form method="post" action="<?php echo base_url(); ?>index.php/user/update_profile/form_email" autocomplete="off">
              <tr>
                <td><label>New Email address</label></td>
                <td><input name="email_address" value="<?php echo set_value('email_address'); ?>" type="text"/></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_email');"/>
                </td>
              </tr>
            </form>
          </table>

          <!-- Form gender -->
          <table class='profile-table'>
            <tr>
              <td>Gender</td>
              <td>
                <?php
                $gender = $this->session->userdata('user')->gender;
                if ($gender != NULL)
                {
                  if ($gender == 0) echo 'Female';
                  else echo 'Male';
                }
                else
                  echo "Click edit to add your gender";
                ?>
              </td>
              <td><a href="#" onclick='displayForm("form_gender"); return false;'>Edit</a></td>
            </tr>
          </table>

          <table class="edit-hidden" id="form_gender" style="display:none;">
            <form method="post" action="<?php echo base_url(); ?>index.php/user/update_profile/form_gender" autocomplete="off">
              <tr>
                <td></td>
                <td>
                  <input type="radio" name="gender" value="0"> Female
                  <input type="radio" name="gender" value="1"> Male
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_gender');"/>
                </td>
              </tr>
            </form>
          </table>

          <!-- Form Height -->
          <table class='profile-table'>
            <tr>
              <td>Height:</td>
              <td>
                <?php
                $height = $this->session->userdata('user')->height;
                if ($height != NULL)
                  echo $height."cm";
                else
                  echo "Click edit to add your height";
                ?>
              </td>
              <td><a href="#" onclick='displayForm("form_height"); return false;'>Edit</a></td>
            </tr>
          </table>

          <table class="edit-hidden" id="form_height" style="display:none;">
            <form method="post" action="<?php echo base_url(); ?>index.php/user/update_profile/form_height" autocomplete="off">
              <tr>
                <td><label>Height   </label></td>
                <td><input name="height" type="number" min="30" value="<?php echo $this->session->userdata('user')->height; ?>" autocomplete="off" style="width:50px;margin-left:10px;"/>cm</td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_height');"/>
                </td>
              </tr>
            </form>
          </table>

          <!-- Form Weight -->
          <table class='profile-table'>
            <tr>
              <td>Weight:</td>
              <td>
                <?php
                $weight = $this->session->userdata('user')->weight;
                if ($weight != NULL)
                  echo $weight."kg";
                else
                  echo "Click edit to add your weight";
                ?>
              </td>
              <td><a href="#" onclick='displayForm("form_weight"); return false;'>Edit</a></td>
            </tr>
          </table>

          <table class="edit-hidden" id="form_weight" style="display:none;">
            <form method="post" action="<?php echo base_url(); ?>index.php/user/update_profile/form_weight" autocomplete="off">
              <tr>
                <td><label>Weight</label></td>
                <td><input name="weight" min="2" type="number" value="<?php echo $this->session->userdata('user')->weight; ?>" style="width:50px;margin-left:10px;"/>kg</td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_weight');"/>
                </td>
              </tr>
            </form>
          </table>

          <!-- Form Preference -->
          <table class='profile-table'>
            <tr>
              <td>Preference:</td>
              <td>
                <?php
                $veg = $this->session->userdata('user')->vegetarian;
                $hal = $this->session->userdata('user')->halal;
                if ($veg == NULL && $hal == NULL)
                  echo "Click edit to add your preference";
                else
                {
                  if (isset($veg) and $veg == 1) echo "Vegetarian; ";
                  else echo "Not vegetarian; ";
                }
                ?>
              </td>
              <td><a href="#" onclick='displayForm("form_preference"); return false;'>Edit</a></td>
            </tr>
          </table>

          <table class="edit-hidden" id="form_preference" style="display:none;">
            <form method="post" action="<?php echo base_url();?>index.php/user/update_profile/form_preference" autocomplete="off">
              <tr>
                <td></td>
                <td>
                  <?php
                  if (isset($this->session->userdata('user')->vegetarian) and $this->session->userdata('user')->vegetarian==1)
                    echo '<input type="checkbox" name="preference" value="vegetarian" checked="yes">Vegetarian';
                  else
                    echo '<input type="checkbox" name="preference" value="vegetarian">Vegetarian';
                  ?>
                  <!-- <input type="checkbox" name="preference[]" value="vegetarian" unchecked>Vegetarian
                  <input type="checkbox" name="preference[]" value="halal" checked="<?php if ($this->session->userdata('user')->halal==1) echo "yes"; ?>">Halal -->
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_preference');"/>
                </td>
              </tr>
            </form>
          </table>

          <!-- Form Password -->

          <table class="edit-hidden" id="form_password" style="display:none;">
            <form method="post" action="<?php echo base_url();?>index.php/user/update_profile/form_password" autocomplete="off">
              <tr>
                <td><label>Current Password</label></td>
                <td><input name="old_pwd" type="text"/></td>
              </tr>
              <tr>
                <td><label>New Password</label></td>
                <td><input name="new_pwd" type="text"/></td>
              </tr>
              <tr>
                <td><label>Confirm Password</label></td>
                <td><input name="conf_pwd" type="text"/></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input class="button" type="submit" name="submit" value="Save"/>
                  <input class="button" type="button" name="submit" value="Cancel" onclick="displayForm('form_password');"/>
                </td>
              </tr>
            </form>
          </table>

          <div id="edit-profile-error">
            <span class="error"><?php echo form_error("first_name");?></span><br/>
            <span class="error"><?php echo form_error("last_name");?></span><br/>
            <span class="error"><?php echo form_error("email_address");?></span><br/>
            <span class="error"><?php echo form_error("gender");?></span><br/>
            <span class="error"><?php echo form_error("height");?></span><br/>
            <span class="error"><?php echo form_error("weight");?></span>
          </div>

          </div>

        </div> <!-- end of content -->

      </div> <!-- end of body -->

    </div> <!-- end of footer -->

  </div> <!-- end of header -->

<script type="text/javascript">
function displayForm(formName)
{
  if (document.getElementById(formName).style.display != 'none')
    document.getElementById(formName).style.display = 'none';
  else
  {
    document.getElementById('form_name').style.display       = 'none';
    document.getElementById('form_email').style.display      = 'none';
    document.getElementById('form_gender').style.display     = 'none';
    document.getElementById('form_height').style.display     = 'none';
    document.getElementById('form_weight').style.display     = 'none';
    document.getElementById('form_preference').style.display = 'none';
    document.getElementById('form_password').style.display   = 'none';
    document.getElementById(formName).style.display          = 'block';
  }
}
</script>