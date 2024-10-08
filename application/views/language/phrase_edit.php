<!-- Add Phrase Start -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Phrase Edit</h1>
            <small></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Language</a></li>
                <li class="active" style="color:orange;">Phrase Edit</li>
            </ol>
        </div>
    </section>

<style>

.btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: white;

   }
 
</style>








    <section class="content">
        <!-- Phrase Edit -->

        <?php
            $message = $this->session->userdata('message');
            if (isset($message)) {
        ?>
        <div class="alert alert-info alert-dismissable" style="background-color:#38469f;color:white;font-weight:bold;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>                    
        </div>
        <?php 
            }
        ?>

        <div class="row">
            <div class="col-sm-12" style="text-align: end;">
                <a href="<?php echo  base_url('Language') ?>"  class="btn btnclr">Language Home</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <?php echo  form_open('language/addlebel') ?>
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead> 
                               
                                    <tr> <td colspan="3"><?php echo $links; ?></td></tr>
                                    <tr style="height:35px;color:white;" class="btnclr">
                                        <th><i class="fa fa-th-list"></i></th>
                                        <th>Phrase</th>
                                        <th>Label</th> 
                                      
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php echo  form_hidden('language', $language) ?>
                                        <?php if (!empty($phrases)) {?>
                                            <?php $sl = 1 ?>
                                            <?php foreach ($phrases as $value) {?>
                                            <tr class="<?php echo  html_escape((empty($value->$language)?"bg-danger":null)) ?>">
                                            
                                                <td><?php echo  $this->uri->segment(4)+$sl ?></td>
                                                <td><input type="text" name="phrase[]" value="<?php echo  html_escape($value->phrase) ?>" class="form-control" readonly></td>
                                                <td><input type="text" name="lang[]" value="<?php echo  html_escape($value->$language) ?>" class="form-control"></td> 
                                            </tr>
                                            <?php $sl++; } ?>
                                        <?php } ?>

                                        <tr>
                                            <td colspan="3"> 
                                                
                                                <button type="submit" style="color:white;" class="btnclr btn">Save</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3"> 
                                                <?php echo $links;?>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        <?php echo form_close()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Phrase Edit End -->




