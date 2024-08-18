<?php
    require('model/spiritual_gifts.php');

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'show_questionnaire';
        }
    }
    
    switch ($action) {
    case 'show_questionnaire':
        $questions = get_questions();
        $answers = [];
        include('view/questionnaire.php');
        break;
    case 'assess_gifts':
        $int_options = array( 'options' => array('default'=> 0) );
        $answers = [
            'row_a' => filter_input(INPUT_POST, 'question_1', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_19', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_37', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_55', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_73', FILTER_VALIDATE_INT, $int_options),
            'row_b' => filter_input(INPUT_POST, 'question_2', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_20', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_38', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_56', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_74', FILTER_VALIDATE_INT, $int_options),
            'row_c' => filter_input(INPUT_POST, 'question_3', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_21', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_39', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_57', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_75', FILTER_VALIDATE_INT, $int_options),
            'row_d' => filter_input(INPUT_POST, 'question_4', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_22', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_40', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_58', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_76', FILTER_VALIDATE_INT, $int_options),
            'row_e' => filter_input(INPUT_POST, 'question_5', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_23', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_41', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_59', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_77', FILTER_VALIDATE_INT, $int_options),
            'row_f' => filter_input(INPUT_POST, 'question_6', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_24', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_42', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_60', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_78', FILTER_VALIDATE_INT, $int_options),
            'row_g' => filter_input(INPUT_POST, 'question_7', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_25', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_43', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_61', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_79', FILTER_VALIDATE_INT, $int_options),
            'row_h' => filter_input(INPUT_POST, 'question_8', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_26', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_44', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_62', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_80', FILTER_VALIDATE_INT, $int_options),
            'row_i' => filter_input(INPUT_POST, 'question_9', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_27', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_45', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_63', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_81', FILTER_VALIDATE_INT, $int_options),
            'row_j' => filter_input(INPUT_POST, 'question_10', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_28', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_46', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_64', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_82', FILTER_VALIDATE_INT, $int_options),
            'row_k' => filter_input(INPUT_POST, 'question_11', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_29', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_47', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_65', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_83', FILTER_VALIDATE_INT, $int_options),
            'row_l' => filter_input(INPUT_POST, 'question_12', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_30', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_48', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_66', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_84', FILTER_VALIDATE_INT, $int_options),
            'row_m' => filter_input(INPUT_POST, 'question_13', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_31', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_49', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_67', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_85', FILTER_VALIDATE_INT, $int_options),
            'row_n' => filter_input(INPUT_POST, 'question_14', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_32', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_50', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_68', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_86', FILTER_VALIDATE_INT, $int_options),
            'row_o' => filter_input(INPUT_POST, 'question_15', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_33', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_51', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_69', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_87', FILTER_VALIDATE_INT, $int_options),
            'row_p' => filter_input(INPUT_POST, 'question_16', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_34', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_52', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_70', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_88', FILTER_VALIDATE_INT, $int_options),
            'row_q' => filter_input(INPUT_POST, 'question_17', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_35', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_53', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_71', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_89', FILTER_VALIDATE_INT, $int_options),
            'row_r' => filter_input(INPUT_POST, 'question_18', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_36', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_54', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_72', FILTER_VALIDATE_INT, $int_options) 
                + filter_input(INPUT_POST, 'question_90', FILTER_VALIDATE_INT, $int_options)
        ];
        
        arsort($answers, 1);        
        
        include('view/results.php');
    default:
        break;
    }
?>