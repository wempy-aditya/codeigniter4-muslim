        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/public/js/animate.js"></script>
        <script src="<?php echo base_url(); ?>/assets/public/js/custom.js"></script>
        
        <?php if($lokasi=="Home") { ?>
        <script src="<?php echo base_url(); ?>/assets/public/js/countdown.js"></script>
        <script src="<?php echo base_url(); ?>/assets/public/js/jadwal_shalat.js"></script>
        <script src="<?php echo base_url(); ?>/assets/public/js/quotes_api.js"></script>
        <?php } elseif ($lokasi=="Quran") {?>
        <script src="<?php echo base_url(); ?>/assets/public/js/ayat.js"></script>
        <?php }  elseif ($lokasi=="Asmaul_Husna") {?>
        <script src="<?php echo base_url(); ?>/assets/public/js/asmaulhusna.js"></script>
        <?php } elseif ($lokasi=="Doa_Harian") { ?>
        <script src="<?php echo base_url(); ?>/assets/public/js/doaharian.js"></script>
        <?php } elseif ($lokasi=="Tasbih") { ?>
        <script src="<?php echo base_url(); ?>/assets/public/js/tasbih.js"></script>
        <?php } elseif($lokasi=="Bacaan_Shalat") {?>
        <script src="<?php echo base_url(); ?>/assets/public/js/bacaanshalat.js"></script>
        <?php }?>

    </body>
</html>