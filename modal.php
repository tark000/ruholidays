<!-- Modal window START-->
    <div class="modal fade" id="exampleModalCenter-<?php the_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-<?php the_id(); ?>" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-form-description" role="document">
      <div class="modal-content modal-form-content">
        <div class="row">
          <div class="col-12 col-sm-6">
            <img src="<?php echo the_field('image'); ?>" alt="<?php the_title(); ?>">
            <div class="row justify-content-between">
              <div class="col-12 col-sm-6 modal-form-price-pic">
                <?php echo the_field('price'); ?>€*<span>/<?php echo the_field('time'); ?></span>
              </div>
              <div class="col-12 col-sm-6 modal-form-text-pic">
                <?php echo the_field('add_info'); ?>
              </div>
            </div>
            <div class="modal-form-text-booking">
            <?php echo the_field('cost'); ?>
            </div>
            <div class="row justify-content-between">
              <div class="col-12 col-sm-8 modal-form-people">
                <div class="row justify-content-between modal-form-people-cost-border">
                  <div class="col-12 col-sm-6 modal-form-people">
                    <b><?php echo the_field('people3-5'); ?></b>
                  </div>
                  <div class="col-12 col-sm-6 modal-form-cost">
                    <?php echo the_field('people_3-5_price'); ?>
                  </div>
                </div>
                <div class="row justify-content-between modal-form-people-cost-border">
                  <div class="col-12 col-sm-6 modal-form-people">
                    <b><?php echo the_field('people_6-19'); ?></b>
                  </div>
                  <div class="col-12 col-sm-6 modal-form-cost">
                    <?php echo the_field('people_6-19_price'); ?>
                  </div>
                </div>
                <div class="row justify-content-between modal-form-people-cost-border">
                  <div class="col-12 col-sm-6 modal-form-people">
                    <b><?php echo the_field('people20'); ?></b>
                  </div>
                  <div class="col-12 col-sm-6 modal-form-cost">
                    <?php echo the_field('people_20_price'); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="modal-input-footer">
                  <span class="dotter-shadow black-shadow input-send-form">
                    <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title modal-form-title" id="exampleModalLongTitle"><?php the_title(); ?></h5>
            <div class="modal-form-text-title">
              <?php the_content(); ?>
            </div>
            <div class="row justify-content-between modal-form-people-cost-border">
              <div class="col-12 col-sm-5">
                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Duration:</b>
              </div>
              <div class="col-12 col-sm-7 text-align-right">
                <?php echo the_field('duration'); ?>
              </div>
            </div>
            <div class="row justify-content-between modal-form-people-cost-border">
              <div class="col-12 col-sm-5">
                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Limits:</b>
              </div>
              <div class="col-12 col-sm-7 text-align-right">
                <?php echo the_field('limits'); ?>
              </div>
            </div>
            <div class="row justify-content-between modal-form-people-cost-border">
              <div class="col-12 col-sm-5">
                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Physical activity:</b>
              </div>
              <div class="col-12 col-sm-7 text-align-right">
                <?php echo the_field('physical_activity'); ?>
              </div>
            </div>
            <div class="row justify-content-between add-margin-top">
              <div class="col-12 col-sm-6">
                
                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Included:</b><br>
                <?php echo the_field('included'); ?>
              </div>
              <div class="col-12 col-sm-6">
                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Not included:</b><br>
                                <?php echo the_field('not_included'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
          <!-- Modal window END-->