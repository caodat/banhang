<?php if($lotteries!=0){ 
foreach($lotteries as $lottery){
  ?>
<div class="soi-cau">
  <h2 class="title">
    <?php echo $lottery['lottery_title']; ?>
  </h2>
  <p>
    <span class = "title-1">
      <b>
        <?php echo $lottery['lottery_title']; ?>
      </b><br>
      
    </span>
    <br>
    <?php  echo $lottery['lottery_content']?>
    <br>
  </p>
  <p>
    <a target="blank" href="#">
      <img width="100px" src="<?php echo base_url().'/styles'; ?>/img/icon112.gif">
    </a>
    <strong style ="font-weight:600;font-size:25px;margin-top:5px; color:#ff9900">...NẠP THẺ.. </strong>
  </p>
  
  <?php echo $lottery['lottery_iframe']; ?>

  
  <a class ="text-center" target="blank" href="#">
    <img src="<?php echo base_url().'/styles'; ?>/img/xien2xien3.gif" width="100%" alt ="">
  </a>
</div>
<div class="thong-ke">
<!-- Statistic========================= -->
<?php 
  $statistics =$this->Mod_trangchu->get_statistic($lottery['lottery_id']); 
  if($statistics!=0){
    echo "<div class='statistic-title'>THỐNG KÊ KẾT QUẢ XỔ SỐ ".$lottery['lottery_name'].'</div>';
    ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>STT</th>
          <th>Ngày</th>
          <th><?php echo $lottery['lottery_name'] ?></th>
          <th>Kết quả</th>
          <th>Số người tham gia</th>
        </tr>
      </thead>  
      <tbody>
    <?php
    $i=1;
    foreach($statistics as $statistic){
    ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $this->Mod_admin1->custom_date($statistic['statistic_date']); ?></td>
        <td><?php echo $statistic['statistic_register'] ?></td>
        <td><?php echo $statistic['statistic_result'] ?></td>
        <td><?php echo $statistic['statistic_people'] ?></td>
      </tr>
    <?php
    $i++;
    }
    echo '</tbody></table>';

    }
?> 
</div>
  <?php }} ?>
