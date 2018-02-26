<?php include('fact_concept_consts.php'); ?>

/************ FACT ONE BLOCKS ************/

var fact_one_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_one; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_prestim_moving_action = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_action_vid; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_prestim_still_action = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_action_still; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_prestim_moving_imagine = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_imagine_vid; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_prestim_still_imagine = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_imagine_still; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_01.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_stim_still = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_01_comb.png',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }




