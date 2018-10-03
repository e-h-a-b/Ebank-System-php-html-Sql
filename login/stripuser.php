          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> عدد الاعضاء</span><i class="fa fa-user"></i>
	
              <div class="count"><?php echo $totusers ?></div>
              <span class="count_bottom"> من الاسبوع الماضي </span><i class="green"> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">رصيد البنك </span><i class="fa fa-clock-o"></i>
              <div class="count"><?php echo $totbalance ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">عدد المشروعات </span><i class="fa fa-user"></i>
              <div class="count green"><?php echo $project ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> عدد الوظائف </span><i class="fa fa-user"></i>
              <div class="count"><?php echo $jobs ?></div>
              <span class="count_bottom"><i class="red"> من الاسبوع الماضي </span><i class="fa fa-sort-desc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> رصيدك </span><i class="fa fa-user"></i>
              <div class="count"><?php echo $userRow['Balance']; ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> أرباحك </span><i class="fa fa-user"></i>
              <div class="count"><?php echo $benfit ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
          </div>
 