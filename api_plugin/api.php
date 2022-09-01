<?php
/*
 * Plugin Name: Custom  API
 * Plugin URI: https://www.linkedin.com/in/sameh-helal/
 * Description: Crushing it!
 * Version: 2.0
 * Author: Sameh helal
 * Author URI: https://www.linkedin.com/in/sameh-helal/
 */

// helper function 
function check_loggedin_user()
{
    $user_id_from_jwt = get_current_user_id();
    return $user_id_from_jwt;
}

function color_name_to_hex($color_name)
{
    // standard 147 HTML color names
    $colors  =  array(
        'aliceblue'      => 'F0F8FF',
        'antiquewhite'   => 'FAEBD7',
        'aqua'           => '00FFFF',
        'aquamarine'     => '7FFFD4',
        'azure'          => 'F0FFFF',
        'beige'          =>'F5F5DC',
        'bisque'         =>'FFE4C4',
        'black'          =>'000000',
        'blanchedalmond '=>'FFEBCD',
        'blue'           =>'0000FF',
        'blueviolet'     =>'8A2BE2',
        'brown'          =>'A52A2A',
        'burlywood'      =>'DEB887',
        'cadetblue'      =>'5F9EA0',
        'chartreuse'     =>'7FFF00',
        'chocolate'      =>'D2691E',
        'coral'          =>'FF7F50',
        'cornflowerblue' =>'6495ED',
        'cornsilk'       =>'FFF8DC',
        'crimson'        =>'DC143C',
        'cyan'           =>'00FFFF',
        'darkblue'       =>'00008B',
        'darkcyan'       =>'008B8B',
        'darkgoldenrod'  =>'B8860B',
        'darkgray'       =>'A9A9A9',
        'darkgreen'      =>'006400',
        'darkgrey'       =>'A9A9A9',
        'darkkhaki'      =>'BDB76B',
        'darkmagenta'    =>'8B008B',
        'darkolivegreen' =>'556B2F',
        'darkorange'     =>'FF8C00',
        'darkorchid'     =>'9932CC',
        'darkred'        =>'8B0000',
        'darksalmon'     =>'E9967A',
        'darkseagreen'=>'8FBC8F',
        'darkslateblue'=>'483D8B',
        'darkslategray'=>'2F4F4F',
        'darkslategrey'=>'2F4F4F',
        'darkturquoise'=>'00CED1',
        'darkviolet'=>'9400D3',
        'deeppink'=>'FF1493',
        'deepskyblue'=>'00BFFF',
        'dimgray'=>'696969',
        'dimgrey'=>'696969',
        'dodgerblue'=>'1E90FF',
        'firebrick'=>'B22222',
        'floralwhite'=>'FFFAF0',
        'forestgreen'=>'228B22',
        'fuchsia'=>'FF00FF',
        'gainsboro'=>'DCDCDC',
        'ghostwhite'=>'F8F8FF',
        'gold'=>'FFD700',
        'goldenrod'=>'DAA520',
        'gray'=>'808080',
        'green'    =>'008000',
        'greenyellow'=>'ADFF2F',
        'grey'=>'808080',
        'honeydew'=>'F0FFF0',
        'hotpink'=>'FF69B4',
        'indianred'=>'CD5C5C',
        'indigo'=>'4B0082',
        'ivory'=>'FFFFF0',
        'khaki'=>'F0E68C',
        'lavender'=>'E6E6FA',
        'lavenderblush'=>'FFF0F5',
        'lawngreen'=>'7CFC00',
        'lemonchiffon'=>'FFFACD',
        'lightblue'=>'ADD8E6',
        'lightcoral'=>'F08080',
        'lightcyan'=>'E0FFFF',
        'lightgoldenrodyellow'=>'FAFAD2',
        'lightgray'=>'D3D3D3',
        'lightgreen'=>'90EE90',
        'lightgrey'=>'D3D3D3',
        'lightpink'=>'FFB6C1',
        'lightsalmon'=>'FFA07A',
        'lightseagreen'=>'20B2AA',
        'lightskyblue'=>'87CEFA',
        'lightslategray'=>'778899',
        'lightslategrey'=>'778899',
        'lightsteelblue'=>'B0C4DE',
        'lightyellow'=>'FFFFE0',
        'lime'=>'00FF00',
        'limegreen'=>'32CD32',
        'linen'=>'FAF0E6',
        'magenta'=>'FF00FF',
        'maroon'=>'800000',
        'mediumaquamarine'=>'66CDAA',
        'mediumblue'=>'0000CD',
        'mediumorchid'=>'BA55D3',
        'mediumpurple'=>'9370D0',
        'mediumseagreen'=>'3CB371',
        'mediumslateblue'=>'7B68EE',
        'mediumspringgreen'=>'00FA9A',
        'mediumturquoise'=>'48D1CC',
        'mediumvioletred'=>'C71585',
        'midnightblue'=>'191970',
        'mintcream'=>'F5FFFA',
        'mistyrose'=>'FFE4E1',
        'moccasin'=>'FFE4B5',
        'navajowhite'=>'FFDEAD',
        'navy'=>'000080',
        'oldlace'=>'FDF5E6',
        'olive'=>'808000',
        'olivedrab'=>'6B8E23',
        'orange'=>'FFA500',
        'orangered'=>'FF4500',
        'orchid'=>'DA70D6',
        'palegoldenrod'=>'EEE8AA',
        'palegreen'=>'98FB98',
        'paleturquoise'=>'AFEEEE',
        'palevioletred'=>'DB7093',
        'papayawhip'=>'FFEFD5',
        'peachpuff'=>'FFDAB9',
        'peru'=>'CD853F',
        'pink'=>'FFC0CB',
        'plum'=>'DDA0DD',
        'powderblue'=>'B0E0E6',
        'purple'=>'800080',
        'red'     =>'FF0000',
        'rosybrown'=>'BC8F8F',
        'royalblue'=>'4169E1',
        'saddlebrown'=>'8B4513',
        'salmon'=>'FA8072',
        'sandybrown'=>'F4A460',
        'seagreen'=>'2E8B57',
        'seashell'=>'FFF5EE',
        'sienna'=>'A0522D',
        'silver'=>'C0C0C0',
        'skyblue'=>'87CEEB',
        'slateblue'=>'6A5ACD',
        'slategray'=>'708090',
        'slategrey'=>'708090',
        'snow'=>'FFFAFA',
        'springgreen'=>'00FF7F',
        'steelblue'=>'4682B4',
        'tan'=>'D2B48C',
        'teal'=>'008080',
        'thistle'=>'D8BFD8',
        'tomato'=>'FF6347',
        'turquoise'=>'40E0D0',
        'violet'=>'EE82EE',
        'wheat'=>'F5DEB3',
        'white'=>'FFFFFF',
        'whitesmoke'=>'F5F5F5',
        'yellow'=>'FFFF00',
        'yellowgreen'=>'9ACD32');

    $color_name = trim(strtolower($color_name));
    if(isset($colors[$color_name])){
        return ('#' . $colors[$color_name]);
    }
    else
    {
        return ($color_name);
    }
}

// helper function 

// get categories
function get_all_categories() {
    $get_parent_cats = array(
        'taxonomy' => 'product_cat',
        'parent'     => '0', //get top level categories only
        'hide_empty' => 0,
        'order'      => 'DESC',
    );
    $all_categories = get_terms($get_parent_cats);
    //get_categories($get_parent_cats); //get parent categories 
    $return = [];
    $data = [];
    foreach($all_categories as $single_category) {
        $parent_cat_id = $single_category->term_id;
        $thumb_id = get_woocommerce_term_meta( $single_category->term_id, 'thumbnail_id', true );
        $term_img = wp_get_attachment_url($thumb_id);
        $data['parent_id']          = $single_category->term_id;
        $data['parent_name']        = $single_category->name;
        $data['parent_slug']        = $single_category->slug;
        $data['parent_taxonomy']    = $single_category->taxonomy;
        $data['parent_description'] = $single_category->description;
        $data['parent_img']         = $term_img;
        $args = array(
            'taxonomy'       => 'product_cat',
            'parent'         => $parent_cat_id,
            'hide_empty'     => 0,
        );
        $terms = get_terms($args);
        //var_dump($terms);

        $i = 0;
        foreach($terms as $child_cat) {
            $child_cat_id = $child_cat->term_id;
            $thumb_id = get_woocommerce_term_meta($child_cat->term_id, 'thumbnail_id', true);
            $term_img = wp_get_attachment_url($thumb_id);
            $data['childs'][$i] = [
                "child_id"           => $child_cat->term_id,
                "child_name"         => $child_cat->name,
                "child_slug"         => $child_cat->slug,
                "child_taxonomy"     => $single_category->taxonomy,
                "child_description"  => $child_cat->description,
                "child_img"          => $term_img
            ];
            $args = array(
                'taxonomy'       => 'product_cat',
                'parent'         => $child_cat_id,
                'hide_empty'     => 0,
            );
            $child_terms = get_terms($args);
            //var_dump($child_terms);

            $j = 0;
            foreach($child_terms as $child_cat) {
                $thumb_id = get_woocommerce_term_meta($child_cat->term_id, 'thumbnail_id', true);
                $term_img = wp_get_attachment_url($thumb_id);
                $data['childs'][$i]['childs'][$j] = [
                    "child_id"           => $child_cat->term_id,
                    "child_name"         => $child_cat->name,
                    "child_slug"         => $child_cat->slug,
                    "child_taxonomy"     => $single_category->taxonomy,
                    "child_description"  => $child_cat->description,
                    "child_img"          => $term_img
                ];
                $j++;
            }

            $i++;
        }
        $return[] = $data;
    } //end of categories logic (childs)
    return $return;
} // end function 

// get_top_selling_products (Edited)
function get_top_selling_products() {
    $current_user_id = check_loggedin_user();
    //$current_user_id =1;
    $args = array(
        'post_type' => 'product',
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        //'posts_per_page' => 1,
    );
    $all_selling_products = get_posts($args);
    $return = [];
    if (empty($all_selling_products)) {
        return $return;
    } else {
        $data = [];
        foreach ($all_selling_products as $product) {
            $product_id = $product->ID;
            $product    = wc_get_product($product_id);
            $data['id']   = $product_id;
            $data['type'] = $product->get_type();
            $data['name'] = $product->get_name();
            $data['slug'] = $product->get_slug();
            $data['date_created'] = $product->get_date_created();
            $data['date_modified'] = $product->get_date_modified();
            $data['status'] = $product->get_status();
            $data['featured'] = $product->get_featured();
            $data['visibility'] = $product->get_catalog_visibility();
            $data['long_description'] = $product->get_description();
            $data['short_description'] = $product->get_short_description();
            $data['sku'] = $product->get_sku();
            $data['menu_order'] = $product->get_menu_order();
            $data['virtual'] = $product->get_virtual();
            $data['permalink'] = get_permalink($product_id);
            $data['tax_status'] = $product->get_tax_status();
            $data['tax_class'] = $product->get_tax_class();
            $data['manage_stock'] = $product->get_manage_stock();
            $data['stock_status'] = $product->get_stock_status();
            $data['back_orders'] = $product->get_backorders();
            $data['sold_individually'] = $product->get_sold_individually();
            $data['pruchase_note'] = $product->get_purchase_note();
            $data['shipping_class'] = $product->get_shipping_class_id();
            $data['weight'] = $product->get_weight();
            $data['length'] = $product->get_length();
            $data['width'] = $product->get_width();
            $data['height'] = $product->get_height();
            $data['dimensions'] = $product->get_dimensions();
            $data['upsell_ids'] = $product->get_upsell_ids();
            $data['cross_sell_ids'] = $product->get_cross_sell_ids();
            $data['parent_id'] = $product->get_parent_id();
            $data['regular_price'] = (double)$product->get_regular_price();
            $data['sale_price'] = (double)$product->get_sale_price();
            $data['price'] = (double)$product->get_price();
            $data['sale_date_from'] = $product->get_date_on_sale_from();
            $data['sale_date_to'] = $product->get_date_on_sale_to();
            $data['total_sales'] = $product->get_total_sales();
            $data['quantity'] = $product->get_stock_quantity();
            $data['product_image'] =  wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
            $data['product_image_id'] = $product->get_image_id();
            $data['product_images_ids'] = $product->get_gallery_image_ids();
            $data['reviews_allowed'] = $product->get_reviews_allowed();
            $data['rating_counts'] = $product->get_rating_counts();
            $data['average_rating'] = $product->get_average_rating();
            $data['review_count'] = $product->get_review_count();
            $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
            if(in_array($product_id,  $favourite_products)) {
                $data['is_favorite'] = true;
            } else {
                $data['is_favorite'] = false;
            }
            $terms    = wp_get_post_terms($product_id); // Get terms for the product
            if (!empty($terms))
            {
                foreach ($terms as $term)
                {
                    $meta_data = get_term_meta($term->term_id); // Get all meta data
                    if(!empty($meta_data)) {
                        $data['meta_data'][] = $meta_data;
                    } else {
                        $data['meta_data'][] = "";
                    }
                }
            }
            if ($data['quantity'] == null) {
                $data['quantity'] = '';
            }
            $data['stock'] = $product->get_stock_quantity();
            $product_attributes      = $product->get_attributes(); // Get the product attributes
            $colors = $product->get_attribute('pa_color');
            $colors_arr = explode(',', $colors);
            $color_hex = [];
            foreach($colors_arr as $c) {
                $hex = color_name_to_hex($c);
                array_push($color_hex, color_name_to_hex($c));
            }
            //$color_hex_str = implode(',', $color_hex);
            $data['product_attributes']  = [
                'color'           => $color_hex,
                'size'            => $product->get_attribute('pa_size'),
                'brand'           => $product->get_attribute('pa_brand'),
            ];
            $return[] = $data;
        }
        return $return;
    } // end else
}// end function

// get recent products (Edited)
function get_recent_products() {
    $current_user_id = check_loggedin_user();
    //$current_user_id =1;
    $args = array(
        'post_type'         => 'product',
        //'post_status'     => 'publish',
        'orderby'           => 'id',
        'order'             => 'DESC',
    );
    $return = [];
    $recent_products = wp_get_recent_posts($args);
    if (empty( $recent_products)) {
        return $return;
    } else {
        $data = [];
        foreach ($recent_products as $product) {
            $product_id = $product['ID'];
            $product    = wc_get_product($product_id);
            $data['id']   = $product_id;
            $data['type'] = $product->get_type();
            $data['name'] = $product->get_name();
            $data['slug'] = $product->get_slug();
            $data['date_created'] = $product->get_date_created();
            $data['date_modified'] = $product->get_date_modified();
            $data['status'] = $product->get_status();
            $data['featured'] = $product->get_featured();
            $data['visibility'] = $product->get_catalog_visibility();
            $data['long_description'] = $product->get_description();
            $data['short_description'] = $product->get_short_description();
            $data['sku'] = $product->get_sku();
            $data['menu_order'] = $product->get_menu_order();
            $data['virtual'] = $product->get_virtual();
            $data['permalink'] = get_permalink($product_id);
            $data['tax_status'] = $product->get_tax_status();
            $data['tax_class'] = $product->get_tax_class();
            $data['manage_stock'] = $product->get_manage_stock();
            $data['stock_status'] = $product->get_stock_status();
            $data['back_orders'] = $product->get_backorders();
            $data['sold_individually'] = $product->get_sold_individually();
            $data['pruchase_note'] = $product->get_purchase_note();
            $data['shipping_class'] = $product->get_shipping_class_id();
            $data['weight'] = $product->get_weight();
            $data['length'] = $product->get_length();
            $data['width'] = $product->get_width();
            $data['height'] = $product->get_height();
            $data['dimensions'] = $product->get_dimensions();
            $data['upsell_ids'] = $product->get_upsell_ids();
            $data['cross_sell_ids'] = $product->get_cross_sell_ids();
            $data['parent_id'] = $product->get_parent_id();
            $data['regular_price'] = (double)$product->get_regular_price();
            $data['sale_price'] = (double)$product->get_sale_price();
            $data['price'] = (double)$product->get_price();
            $data['sale_date_from'] = $product->get_date_on_sale_from();
            $data['sale_date_to'] = $product->get_date_on_sale_to();
            $data['total_sales'] = $product->get_total_sales();
            $data['quantity'] = $product->get_stock_quantity();
            $data['product_image'] =  wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
            $data['product_image_id'] = $product->get_image_id();
            $data['product_images_ids'] = $product->get_gallery_image_ids();
            $data['reviews_allowed'] = $product->get_reviews_allowed();
            $data['rating_counts'] = $product->get_rating_counts();
            $data['average_rating'] = $product->get_average_rating();
            $data['review_count'] = $product->get_review_count();
            $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
            if(in_array($product_id,  $favourite_products)) {
                $data['is_favorite'] = true;
            } else {
                $data['is_favorite'] = false;
            }
            $terms    = wp_get_post_terms($product_id); // Get terms for the product
            if (!empty($terms))
            {
                foreach ($terms as $term)
                {
                    $meta_data = get_term_meta($term->term_id); // Get all meta data
                    if(!empty($meta_data)) {
                        $data['meta_data'][] = $meta_data;
                    } else {
                        $data['meta_data'][] = "";
                    }
                }
            }
            if ($data['quantity'] == null) {
                $data['quantity'] = '';
            }
            $data['stock'] = $product->get_stock_quantity();
            $product_attributes      = $product->get_attributes(); // Get the product attributes
            $colors = $product->get_attribute('pa_color');
            $colors_arr = explode(',', $colors);
            $color_hex = [];
            foreach($colors_arr as $c) {
                $hex = color_name_to_hex($c);
                array_push($color_hex, color_name_to_hex($c));
            }
            //$color_hex_str = implode(',', $color_hex);
            $data['product_attributes']  = [
                'color'           => $color_hex,
                'size'            => $product->get_attribute('pa_size'),
                'brand'           => $product->get_attribute('pa_brand'),
            ];
            $return[] = $data;
        }
        return $return;
    }
}  // end function

// get products by category 
function get_product_by_category($data) {
    $current_user_id = check_loggedin_user();
    //$current_user_id =1;
    $args = array(
        'status'   => 'publish',
        'category' => $data['slug']
    );
    $all_products = wc_get_products($args);
    $response = array();
    $data = [];
    foreach ($all_products as $product) {
        $product_id = $product->id;
        $product    = wc_get_product($product_id);
        $data['id']   = $product_id;
        $data['type'] = $product->get_type();
        $data['name'] = $product->get_name();
        $data['slug'] = $product->get_slug();
        $data['date_created'] = $product->get_date_created();
        $data['date_modified'] = $product->get_date_modified();
        $data['status'] = $product->get_status();
        $data['featured'] = $product->get_featured();
        $data['visibility'] = $product->get_catalog_visibility();
        $data['long_description'] = $product->get_description();
        $data['short_description'] = $product->get_short_description();
        $data['sku'] = $product->get_sku();
        $data['menu_order'] = $product->get_menu_order();
        $data['virtual'] = $product->get_virtual();
        $data['permalink'] = get_permalink($product_id);
        $data['tax_status'] = $product->get_tax_status();
        $data['tax_class'] = $product->get_tax_class();
        $data['manage_stock'] = $product->get_manage_stock();
        $data['stock_status'] = $product->get_stock_status();
        $data['back_orders'] = $product->get_backorders();
        $data['sold_individually'] = $product->get_sold_individually();
        $data['pruchase_note'] = $product->get_purchase_note();
        $data['shipping_class'] = $product->get_shipping_class_id();
        $data['weight'] = $product->get_weight();
        $data['length'] = $product->get_length();
        $data['width'] = $product->get_width();
        $data['height'] = $product->get_height();
        $data['dimensions'] = $product->get_dimensions();
        $data['upsell_ids'] = $product->get_upsell_ids();
        $data['cross_sell_ids'] = $product->get_cross_sell_ids();
        $data['parent_id'] = $product->get_parent_id();
        $data['regular_price'] = (double)$product->get_regular_price();
        $data['sale_price'] = (double)$product->get_sale_price();
        $data['price'] = (double)$product->get_price();
        $data['sale_date_from'] = $product->get_date_on_sale_from();
        $data['sale_date_to'] = $product->get_date_on_sale_to();
        $data['total_sales'] = $product->get_total_sales();
        $data['quantity'] = $product->get_stock_quantity();
        $data['product_image'] =  wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
        $data['product_image_id'] = $product->get_image_id();
        $data['product_images_ids'] = $product->get_gallery_image_ids();
        $data['reviews_allowed'] = $product->get_reviews_allowed();
        $data['rating_counts'] = $product->get_rating_counts();
        $data['average_rating'] = $product->get_average_rating();
        $data['review_count'] = $product->get_review_count();
        $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
        if(in_array($product_id,  $favourite_products)) {
            $data['is_favorite'] = true;
        } else {
            $data['is_favorite'] = false;
        }
        $terms    = wp_get_post_terms($product_id); // Get terms for the product
        if (!empty($terms))
        {
            foreach ($terms as $term)
            {
                $meta_data = get_term_meta($term->term_id); // Get all meta data
                if(!empty($meta_data)) {
                    $data['meta_data'][] = $meta_data;
                } else {
                    $data['meta_data'][] = "";
                }
            }
        }
        if ($data['quantity'] == null) {
            $data['quantity'] = '';
        }
        $data['stock'] = $product->get_stock_quantity();
        $product_attributes      = $product->get_attributes(); // Get the product attributes
        $colors = $product->get_attribute('pa_color');
        $colors_arr = explode(',', $colors);
        $color_hex = [];
        foreach($colors_arr as $c) {
            $hex = color_name_to_hex($c);
            array_push($color_hex, color_name_to_hex($c));
        }
        //$color_hex_str = implode(',', $color_hex);
        $data['product_attributes']  = [
            'color'           => $color_hex,
            'size'            => $product->get_attribute('pa_size'),
            'brand'           => $product->get_attribute('pa_brand'),
        ];
        $response[] = $data;
    }
    return $response;
} // end function

// login
function login(WP_REST_Request $request) {
    $creds = array();
    $parameters             = $request->get_json_params();
    $creds['user_login']    = sanitize_text_field($parameters['username']); // $request["username"];
    $creds['user_password'] =  sanitize_text_field($parameters['password']); // $request["password"];
    $creds['remember']      = true;
    $error = new WP_Error();
    if (empty($creds['user_login'])) {
        $error->add(400, __("Username field 'username' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (empty($creds['user_password'])) {
        $error->add(404, __("Password field 'password' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    $user = wp_signon($creds, false);
    if ( is_wp_error($user) )
        echo $user->get_error_message();
    return $user;
}

//register
function register(WP_REST_Request $request) {
    $response = array();
    $parameters = $request->get_json_params();
    $username = sanitize_text_field($parameters['username']);
    $email = sanitize_text_field($parameters['email']);
    $password = sanitize_text_field($parameters['password']);
    $error = new WP_Error();
    if (empty($username)) {
        $error->add(400, __("Username field 'username' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (empty($email)) {
        $error->add(401, __("Email field 'email' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (empty($password)) {
        $error->add(404, __("Password field 'password' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    $user_id = username_exists($username);
    if (!$user_id && email_exists($email) == false) {
        $user_id = wp_create_user($username, $password, $email);
        if (!is_wp_error($user_id)) {
            // Ger User Meta Data (Sensitive, Password included. DO NOT pass to front end.)
            $user = get_user_by('id', $user_id);
            // $user->set_role($role);
            $user->set_role('subscriber');
            // WooCommerce specific code
            if (class_exists('WooCommerce')) {
                $user->set_role('customer');
            }

            $login_req['username'] = $user->data->user_email;;
            $login_req['password'] = $password;
            $new_value = rand(1,9999);
             $new = update_user_meta( $user_id, '_otp_nmber', $new_value);
            // Ger User Data (Non-Sensitive, Pass to front end.)
            $response = generate_token($login_req);
        } else {
            return $user_id .''. $new ;
        }
    } else {
        $error->add(406, __("Email already exists, please try 'Reset Password'", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    return new WP_REST_Response($response, 123);
}

function generate_token($request){

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://www.lakuom.com/wp-json/jwt-auth/v1/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => wp_json_encode($request),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode(stripslashes($response), true);
}

// get slider images
function get_slides() {
    $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'taxonomy'                 => 'slide-page',
        'pad_counts'               => false
    );
    $return = [];
    $groups = get_categories($args);
    foreach ($groups as $group) {
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'slide',
            'tax_query' => array(
                array(
                    'taxonomy' => 'slide-page',
                    'field' => 'term_id',
                    'terms' => $group->term_id,
                )
            )
        );

        $slides = get_posts($args);
    }
    $data = [];
    foreach($slides as $slide) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($slide->ID), 'single-post-thumbnail' );
        $data['slide_id']          = $slide->ID;
        $data['slide_content']     = $image[0];
        $return [] = $data;
    }

    return $return;
} // End get_slides()

// get related products by product Id
function get_related_product($data) {
    $current_user_id = check_loggedin_user();
    //$current_user_id =1;
    $productId = $data['id'];
    $related_products = wc_get_related_products($productId);
    $data = [];
    $response = [];
    foreach ($related_products as $product_ID) {
        $product     = wc_get_product($product_ID);
        $product_id = $product->id;
        $data['id']   = $product_id;
        $data['type'] = $product->get_type();
        $data['name'] = $product->get_name();
        $data['slug'] = $product->get_slug();
        $data['date_created'] = $product->get_date_created();
        $data['date_modified'] = $product->get_date_modified();
        $data['status'] = $product->get_status();
        $data['featured'] = $product->get_featured();
        $data['visibility'] = $product->get_catalog_visibility();
        $data['long_description'] = $product->get_description();
        $data['short_description'] = $product->get_short_description();
        $data['sku'] = $product->get_sku();
        $data['menu_order'] = $product->get_menu_order();
        $data['virtual'] = $product->get_virtual();
        $data['permalink'] = get_permalink($product_id);
        $data['tax_status'] = $product->get_tax_status();
        $data['tax_class'] = $product->get_tax_class();
        $data['manage_stock'] = $product->get_manage_stock();
        $data['stock_status'] = $product->get_stock_status();
        $data['back_orders'] = $product->get_backorders();
        $data['sold_individually'] = $product->get_sold_individually();
        $data['pruchase_note'] = $product->get_purchase_note();
        $data['shipping_class'] = $product->get_shipping_class_id();
        $data['weight'] = $product->get_weight();
        $data['length'] = $product->get_length();
        $data['width'] = $product->get_width();
        $data['height'] = $product->get_height();
        $data['dimensions'] = $product->get_dimensions();
        $data['upsell_ids'] = $product->get_upsell_ids();
        $data['cross_sell_ids'] = $product->get_cross_sell_ids();
        $data['parent_id'] = $product->get_parent_id();
        $data['regular_price'] = (double)$product->get_regular_price();
        $data['sale_price'] = (double)$product->get_sale_price();
        $data['price'] = (double)$product->get_price();
        $data['sale_date_from'] = $product->get_date_on_sale_from();
        $data['sale_date_to'] = $product->get_date_on_sale_to();
        $data['total_sales'] = $product->get_total_sales();
        $data['quantity'] = $product->get_stock_quantity();
        $data['product_image'] =  wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
        $data['product_image_id'] = $product->get_image_id();
        $data['product_images_ids'] = $product->get_gallery_image_ids();
        $data['reviews_allowed'] = $product->get_reviews_allowed();
        $data['rating_counts'] = $product->get_rating_counts();
        $data['average_rating'] = $product->get_average_rating();
        $data['review_count'] = $product->get_review_count();
        $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
        if(in_array($product_id,  $favourite_products)) {
            $data['is_favorite'] = true;
        } else {
            $data['is_favorite'] = false;
        }
        $terms    = wp_get_post_terms($product_id); // Get terms for the product
        if (!empty($terms))
        {
            foreach ($terms as $term)
            {
                $meta_data = get_term_meta($term->term_id); // Get all meta data
                if(!empty($meta_data)) {
                    $data['meta_data'][] = $meta_data;
                } else {
                    $data['meta_data'][] = "";
                }
            }
        }
        if ($data['quantity'] == null) {
            $data['quantity'] = '';
        }
        $data['stock'] = $product->get_stock_quantity();
        $product_attributes      = $product->get_attributes(); // Get the product attributes
        $colors = $product->get_attribute('pa_color');
        $colors_arr = explode(',', $colors);
        $color_hex = [];
        foreach($colors_arr as $c) {
            $hex = color_name_to_hex($c);
            array_push($color_hex, color_name_to_hex($c));
        }
        //$color_hex_str = implode(',', $color_hex);
        $data['product_attributes']  = [
            'color'           => $color_hex,
            'size'            => $product->get_attribute('pa_size'),
            'brand'           => $product->get_attribute('pa_brand'),
        ];
        $response [] = $data;
    }
    return new WP_REST_Response($response, 200);
}

// get customer reviews by product Id
function get_customer_reviews($data) {
    $productId = $data['id'];
    //$current_user_id = check_loggedin_user();
    $args = array(
        'status'      => 'approve',
        'post_status' => 'publish',
        'post_type'   => 'product',
        'post_id'     =>  $productId,
        //'user_id'     =>  $current_user_id
    );
    //$comments = wp_list_comments( array( 'callback' => 'woocommerce_comments' ), $args);
    $comments = get_comments($args);
    //var_dump($comments);
    //exit;
    $return = [];
    if (empty($comments)) {
        return $return;
    } else {
        $data = [];
        foreach ($comments as $comment) {
            $comment_id = $comment->comment_ID;
            $attachment_ids = get_comment_meta( $comment->comment_ID, 'reviews-images', true );

            $attachments =[];
            foreach ($attachment_ids as $attachment_id) {
                $image_url = wp_get_attachment_image_url( $attachment_id, 'full' );
                array_push($attachments, $image_url);
            }

            $rate = get_comment_meta($comment->comment_ID, 'rating', true);
            $data['id']                   = $comment->comment_ID;
            $data['post_id']              = $comment->post_title;
            $data['comment_author']       = $comment->comment_author;
            $data['comment_author_email'] = $comment->comment_author_email;
            $data['comment_author_url']   = $comment->comment_author_url;
            $data['comment_author_IP']    = $comment->comment_author_IP;
            $data['comment_date']         = $comment->comment_date;
            $data['comment_content']      = $comment->comment_content;
            $data['comment_approved']     = $comment->comment_approved;
            $data['comment_type']         = $comment->comment_type;
            $data['comment_parent']       = $comment->comment_parent;
            $data['user_id']              = $comment->user_id;
            $data['rating']               = $rate;
            $data['attachment']			  = $attachments;
            array_push($return, $data);
            //$return['data'] = $data;
        }
        //$return['all'] = $comments;
        return $return;
    } // end else
}

// post customer reviews 
function post_customer_reviews(WP_REST_Request $request) {

    $parameters = $request->get_json_params();
    $response = array();
    $fields = array();

    $current_user_id = check_loggedin_user();
    $user_info = get_userdata($current_user_id);
    $fields['comment_post_ID']    = sanitize_text_field($parameters['productId']);
    $fields['comment_content']    = sanitize_text_field($parameters['content']);
    $fields['rating']             = sanitize_text_field($parameters['rating']);
    $error = new WP_Error();
    if (empty($fields['comment_post_ID'])) {
        $error->add(400, __("Product Id is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (empty($fields['comment_content'])) {
        $error->add(404, __("Review Content is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (empty($fields['rating'])) {
        $error->add(404, __("Rate is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if ($fields['rating'] <= 0 || $fields['rating'] > 5) {
        $error->add(404, __("Rate Should from 1 to 5 only.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    $comment_id = wp_insert_comment( array(
        'comment_post_ID'      => $fields['comment_post_ID'], // <=== The product ID where the review will show up
        'comment_content'      => $fields['comment_content'],
        'comment_type'         => 'review',
        'comment_parent'       => 0,
        'user_id'              => $user_info->ID, // <== Important change it later
        'comment_author'       => $user_info->data->user_nicename,
        'comment_author_IP'    => '',
        'comment_agent'        => 'Mobile App',
        'comment_date'         => date('Y-m-d H:i:s'),
        'comment_approved'     => 1,
    ) );

    $attachment_ids =[];
    $attachment_data =[];
    $files = $parameters['files'];
    foreach($files as $file){
        $attachmend_id = save_image($file, guidv4());
        $attach_data   = wp_generate_attachment_metadata($attach_id, $file_loc);
        array_push($attachment_data,$attachmend_id);
        wp_update_attachment_metadata($attach_id, $attach_data);
        array_push($attachment_ids,$attachmend_id);
    }
    // HERE inserting the rating (an integer from 1 to 5)
    $comment = update_comment_meta( $comment_id, 'rating', $fields['rating']);
    $comment = update_comment_meta( $comment_id, 'reviews-images', $attachment_ids);
    if ($comment) {
        $response['code'] = 200;
        $response['message'] = __(" Review was Created Successfully", "wp-rest-user");
    }
    else {
        $error->add(404, __("Invalid Somthing Happened", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    return new WP_REST_Response($response, 123);
}

function save_image( $base64_img, $title ) {

    // Upload dir.
    $upload_dir  = wp_upload_dir();
    $upload_path = str_replace( '/', DIRECTORY_SEPARATOR, $upload_dir['path'] ) . DIRECTORY_SEPARATOR;

    $img             = str_replace( 'data:image/jpeg;base64,', '', $base64_img );
    $img             = str_replace( ' ', '+', $img );
    $decoded         = base64_decode( $img );
    $filename        = $title . '.jpeg';
    $file_type       = 'image/jpeg';
    $hashed_filename = md5( $filename . microtime() ) . '_' . $filename;

    // Save the image in the uploads directory.
    $upload_file = file_put_contents( $upload_path . $hashed_filename, $decoded );

    $attachment = array(
        'post_mime_type' => $file_type,
        'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $hashed_filename ) ),
        'post_content'   => '',
        'post_status'    => 'inherit',
        'guid'           => $upload_dir['url'] . '/' . basename( $hashed_filename )
    );

    $attach_id = wp_insert_attachment( $attachment, $upload_dir['path'] . '/' . $hashed_filename );

    return $attach_id;
}

// get user profile
function get_user_profile() {
    $response = array();
    $current_user_id = check_loggedin_user();

    $first_name    = get_user_meta($current_user_id, 'first_name', true);
    $last_name     = get_user_meta($current_user_id, 'last_name', true);
    $billing_phone = get_user_meta($current_user_id, 'billing_phone', true);
    $birth_date    = get_user_meta($current_user_id, 'birth_date', true);
    $gender        = get_user_meta($current_user_id, 'gender', true);
    $user_info     = get_userdata($current_user_id);
    $email         = $user_info->user_email;
    $user_profile = array(
        "first_name"         => $first_name,
        "last_name"          => $last_name,
        "billing_phone"      => $billing_phone,
        "birth_date"         => $birth_date,
        "gender"             => $gender,
        "email"              => $email
    );
    $response [] = $user_profile;
    return new WP_REST_Response($response, 123);
}

// edit user profile 
function edit_user_profile(WP_REST_Request $request) {
    $fields = array();
    $response = array();
    $current_user_id = check_loggedin_user();
    $error = new WP_Error();
    $parameters              = $request->get_json_params();
    $fields['first-name']    = sanitize_text_field($parameters['fname']);
    $fields['last-name']     = sanitize_text_field($parameters['lname']);
    $fields['email']         = sanitize_text_field($parameters['email']);
    $fields['birth_date']    = sanitize_text_field($parameters['birthdate']);
    $fields['billing_phone'] = sanitize_text_field($parameters['phoneNo']);
    $fields['gender']        = sanitize_text_field($parameters['gender']);
    if (!empty($fields['email'])) {
        if (!is_email(esc_attr($fields['email']))) {
            $error->add(400, __('The Email you entered is not valid.  please try again.', 'wp-rest-user'), array('status' => 400));
            return $error;
        }
        else {
            $args= array (
                'ID'         => $current_user_id,
                'user_email' => esc_attr($fields['email'])
            );
            // var_dump($args);
            // exit;
            $user_data = wp_update_user($args);
        }
    }
    if (!empty($fields['first-name']))
        update_user_meta($current_user_id, 'first_name', esc_attr($fields['first-name']));
    if (!empty( $fields['last-name']))
        update_user_meta($current_user_id, 'last_name', esc_attr($fields['last-name']));
    if (!empty( $fields['billing_phone']))
        update_user_meta($current_user_id, 'billing_phone', esc_attr($fields['billing_phone']));
    if (!empty( $fields['birth_date']))
        update_user_meta($current_user_id, 'birth_date', esc_attr($fields['birth_date']));
    if (!empty( $fields['gender']))
        update_user_meta($current_user_id, 'gender', esc_attr($fields['gender']));
    if (is_wp_error($user_data)) {
        $error->add(400, __('There is a something wrong when Edit User Profile', 'wp-rest-user'), array('status' => 400));
        return $error;
    } else {
        $response['code'] = 200;
        $response['message'] = __("User Information was Successfully Updated", "wp-rest-user");
    }
    return new WP_REST_Response($response, 123);
}

// get products by attribute
function get_products_by_attribute($data) {
    $current_user_id = check_loggedin_user();
    //$current_user_id =1;
    $attribute = strtolower($data['attribute']);
    if($attribute == "color") {
        $terms = array('blue', 'Red', 'green');
    }
    if($attribute == "brand") {
        $terms = array('Vitra');
    }
    $args = array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'tax_query'          => array(
            array(
                'taxonomy'  => 'pa_'.$attribute,
                'field'     => 'slug',
                'terms'     =>  $terms,
                'operator'  => 'IN',
            )
        )
    );
    // The query
    $query    = new WP_Query($args);
    $products = $query->posts;
    $return = [];
    if (empty($products)) {
        return $return;
    } else {
        $data = [];
        foreach ($products as $product) {
            $product_id = $product->ID;
            $product    = wc_get_product($product_id);
            $data['id']   = $product_id;
            $data['type'] = $product->get_type();
            $data['name'] = $product->get_name();
            $data['slug'] = $product->get_slug();
            $data['date_created'] = $product->get_date_created();
            $data['date_modified'] = $product->get_date_modified();
            $data['status'] = $product->get_status();
            $data['featured'] = $product->get_featured();
            $data['visibility'] = $product->get_catalog_visibility();
            $data['long_description'] = $product->get_description();
            $data['short_description'] = $product->get_short_description();
            $data['sku'] = $product->get_sku();
            $data['menu_order'] = $product->get_menu_order();
            $data['virtual'] = $product->get_virtual();
            $data['permalink'] = get_permalink($product_id);
            $data['tax_status'] = $product->get_tax_status();
            $data['tax_class'] = $product->get_tax_class();
            $data['manage_stock'] = $product->get_manage_stock();
            $data['stock_status'] = $product->get_stock_status();
            $data['back_orders'] = $product->get_backorders();
            $data['sold_individually'] = $product->get_sold_individually();
            $data['pruchase_note'] = $product->get_purchase_note();
            $data['shipping_class'] = $product->get_shipping_class_id();
            $data['weight'] = $product->get_weight();
            $data['length'] = $product->get_length();
            $data['width'] = $product->get_width();
            $data['height'] = $product->get_height();
            $data['dimensions'] = $product->get_dimensions();
            $data['upsell_ids'] = $product->get_upsell_ids();
            $data['cross_sell_ids'] = $product->get_cross_sell_ids();
            $data['parent_id'] = $product->get_parent_id();
            $data['regular_price'] = (double)$product->get_regular_price();
            $data['sale_price'] = (double)$product->get_sale_price();
            $data['price'] = (double)$product->get_price();
            $data['sale_date_from'] = $product->get_date_on_sale_from();
            $data['sale_date_to'] = $product->get_date_on_sale_to();
            $data['total_sales'] = $product->get_total_sales();
            $data['quantity'] = $product->get_stock_quantity();
            $data['product_image'] =  wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
            $data['product_image_id'] = $product->get_image_id();
            $data['product_images_ids'] = $product->get_gallery_image_ids();
            $data['reviews_allowed'] = $product->get_reviews_allowed();
            $data['rating_counts'] = $product->get_rating_counts();
            $data['average_rating'] = $product->get_average_rating();
            $data['review_count'] = $product->get_review_count();
            $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
            if(in_array($product_id,  $favourite_products)) {
                $data['is_favorite'] = true;
            } else {
                $data['is_favorite'] = false;
            }
            $terms    = wp_get_post_terms($product_id); // Get terms for the product
            if (!empty($terms))
            {
                foreach ($terms as $term)
                {
                    $meta_data = get_term_meta($term->term_id); // Get all meta data
                    if(!empty($meta_data)) {
                        $data['meta_data'][] = $meta_data;
                    } else {
                        $data['meta_data'][] = "";
                    }
                }
            }
            if ($data['quantity'] == null) {
                $data['quantity'] = '';
            }
            $data['stock'] = $product->get_stock_quantity();
            $product_attributes      = $product->get_attributes(); // Get the product attributes
            $colors = $product->get_attribute('pa_color');
            $colors_arr = explode(',', $colors);
            $color_hex = [];
            foreach($colors_arr as $c) {
                $hex = color_name_to_hex($c);
                array_push($color_hex, color_name_to_hex($c));
            }
            //$color_hex_str = implode(',', $color_hex);
            $data['product_attributes']  = [
                'color'           => $color_hex,
                'size'            => $product->get_attribute('pa_size'),
                'brand'           => $product->get_attribute('pa_brand'),
            ];
            $return[] = $data;
        }
        return $return;
    } // end else
}

// get product details by product Id
function get_attribute_id_from_name( $name ) {
    global $wpdb;
    $sql = "SELECT attribute_id FROM {$wpdb->prefix}woocommerce_attribute_taxonomies WHERE attribute_name LIKE '$name'";
    $attribute_id = $wpdb->get_col($sql);
    return reset($attribute_id);
}

// edited
function get_product_details($data) {
    $product_id = $data['id'];
    $current_user_id = check_loggedin_user();
    //$current_user_id = 1;
    $response   = array();
    $products_res = array();
    $variations_res = array();
    $variations_array = array();
    $product    = wc_get_product($product_id);
    if($product->is_type('simple')) {
        $products_res['id']   = $product_id;
        $products_res['type'] = $product->get_type();
        $products_res['name'] = $product->get_name();
        $products_res['slug'] = $product->get_slug();
        $products_res['date_created'] = $product->get_date_created();
        $products_res['date_modified'] = $product->get_date_modified();
        $products_res['status'] = $product->get_status();
        $products_res['featured'] = $product->get_featured();
        $products_res['visibility'] = $product->get_catalog_visibility();
        $products_res['long_description'] = $product->get_description();
        $products_res['short_description'] = $product->get_short_description();
        $products_res['sku'] = $product->get_sku();
        $products_res['menu_order'] = $product->get_menu_order();
        $products_res['virtual'] = $product->get_virtual();
        $products_res['permalink'] = get_permalink($product_id);
        $products_res['tax_status'] = $product->get_tax_status();
        $products_res['tax_class'] = $product->get_tax_class();
        $products_res['manage_stock'] = $product->get_manage_stock();
        $products_res['stock_status'] = $product->get_stock_status();
        $products_res['back_orders'] = $product->get_backorders();
        $products_res['sold_individually'] = $product->get_sold_individually();
        $products_res['pruchase_note'] = $product->get_purchase_note();
        $products_res['shipping_class'] = $product->get_shipping_class_id();
        $products_res['weight'] = $product->get_weight();
        $products_res['length'] = $product->get_length();
        $products_res['width'] = $product->get_width();
        $products_res['height'] = $product->get_height();
        $products_res['dimensions'] = $product->get_dimensions();
        $products_res['upsell_ids'] = $product->get_upsell_ids();
        $products_res['cross_sell_ids'] = $product->get_cross_sell_ids();
        $products_res['parent_id'] = $product->get_parent_id();
        $products_res['regular_price'] = (double)$product->get_regular_price();
        $products_res['sale_price'] = (double)$product->get_sale_price();
        $products_res['price'] = (double)$product->get_price();
        $products_res['sale_date_from'] = $product->get_date_on_sale_from();
        $products_res['sale_date_to'] = $product->get_date_on_sale_to();
        $products_res['total_sales'] = $product->get_total_sales();
        $products_res['quantity'] = $product->get_stock_quantity();
        $products_res['product_image'] =  wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
        $products_res['product_image_id'] = $product->get_image_id();
        $products_res['product_images_ids'] = $product->get_gallery_image_ids();
        $products_res['reviews_allowed'] = $product->get_reviews_allowed();
        $products_res['rating_counts'] = $product->get_rating_counts();
        $products_res['average_rating'] = $product->get_average_rating();
        $products_res['review_count'] = $product->get_review_count();
        $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
        if(in_array($product_id,  $favourite_products)) {
            $products_res['is_favorite'] = true;
        } else {
            $products_res['is_favorite'] = false;
        }
        $terms    = wp_get_post_terms($product_id); // Get terms for the product
        if (!empty($terms))
        {
            foreach ($terms as $term)
            {
                $meta_data = get_term_meta($term->term_id); // Get all meta data
                if(!empty($meta_data)) {
                    $products_res['meta_data'][] = $meta_data;
                } else {
                    $products_res['meta_data'][] = "";
                }
            }
        }
        if ($products_res['quantity'] == null) {
            $products_res['quantity'] = '';
        }
        $products_res['stock'] = $product->get_stock_quantity();
        $product_attributes      = $product->get_attributes(); // Get the product attributes
        $colors = $product->get_attribute('pa_color');
        $colors_arr = explode(',', $colors);
        $color_hex = [];
        foreach($colors_arr as $c) {
            $hex = color_name_to_hex($c);
            array_push($color_hex, color_name_to_hex($c));
        }
        //$color_hex_str = implode(',', $color_hex);
        $products_res['product_attributes']  = [
            'color'           => $color_hex,
            'size'            => $product->get_attribute('pa_size'),
            'brand'           => $product->get_attribute('pa_brand'),
        ];
        $response[] = $products_res;
    }
    elseif( $product->is_type('variable'))
    {
        $current_products = $product->get_children();
        //var_dump($current_products);
        //exit;
        $product_attributes = $product->get_attributes(); // Get the product attributes
        $variations_array['id'] = $product_id;
        $variations_array['type'] = $product->get_type();
        $variations_array['name'] = $product->get_name();
        $variations_array['slug'] = $product->get_slug();
        $variations_array['date_created'] = $product->get_date_created();
        $variations_array['date_modified'] = $product->get_date_modified();
        $variations_array['status'] = $product->get_status();
        $variations_array['featured'] = $product->get_featured();
        $variations_array['visibility'] = $product->get_catalog_visibility();
        $variations_array['long_description'] = $product->get_description();
        $variations_array['short_description'] = $product->get_short_description();
        $variations_array['sku'] = $product->get_sku();
        $variations_array['menu_order'] = $product->get_menu_order();
        $variations_array['virtual'] = $product->get_virtual();
        $variations_array['permalink'] = get_permalink($product_id);
        $variations_array['tax_status'] = $product->get_tax_status();
        $variations_array['tax_class'] = $product->get_tax_class();
        $variations_array['manage_stock'] = $product->get_manage_stock();
        $variations_array['stock_status'] = $product->get_stock_status();
        $variations_array['back_orders'] = $product->get_backorders();
        $variations_array['sold_individually'] = $product->get_sold_individually();
        $variations_array['pruchase_note'] = $product->get_purchase_note();
        $variations_array['shipping_class'] = $product->get_shipping_class_id();
        $variations_array['weight'] = $product->get_weight();
        $variations_array['length'] = $product->get_length();
        $variations_array['width'] = $product->get_width();
        $variations_array['height'] = $product->get_height();
        $variations_array['dimensions'] = $product->get_dimensions();
        $variations_array['upsell_ids'] = $product->get_upsell_ids();
        $variations_array['cross_sell_ids'] = $product->get_cross_sell_ids();
        $variations_array['parent_id'] = $product->get_parent_id();
        $variations_array['regular_price'] = (double)$product->get_regular_price();
        $variations_array['sale_price'] = (double)$product->get_sale_price();
        $variations_array['price'] = (double)$product->get_price();
        $variations_array['sale_date_from'] = $product->get_date_on_sale_from();
        $variations_array['sale_date_to'] = $product->get_date_on_sale_to();
        $variations_array['total_sales'] = $product->get_total_sales();
        $variations_array['quantity'] = $product->get_stock_quantity();
        $variations_array['product_image'] =  get_the_post_thumbnail($product);
        $variations_array['product_image_id'] = $product->get_image_id();
        $variations_array['product_images_ids'] = $product->get_gallery_image_ids();
        $variations_array['reviews_allowed'] = $product->get_reviews_allowed();
        $variations_array['rating_counts'] = $product->get_rating_counts();
        $variations_array['average_rating'] = $product->get_average_rating();
        $variations_array['review_count'] = $product->get_review_count();
        $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
        if(in_array($product_id,  $favourite_products)) {
            $variations_array['is_favorite'] = true;
        } else {
            $variations_array['is_favorite'] = false;
        }
        $terms    = wp_get_post_terms($product_id); // Get terms for the product
        if (!empty($terms))
        {
            foreach ($terms as $term)
            {
                $meta_data = get_term_meta($term->term_id); // Get all meta data
                if(!empty($meta_data)) {
                    $variations_array['meta_data'][] = $meta_data;
                } else {
                    $variations_array['meta_data'][] = "";
                }
            }
        }
        if ($variations_array['quantity'] == null) {
            $variations_array['quantity'] = '';
        }
        $variations_array['stock'] = $product->get_stock_quantity();
        $colors = $product->get_attribute('pa_color');
        $colors_arr = explode(',', $colors);
        $color_hex = [];
        foreach($colors_arr as $c) {
            $hex = color_name_to_hex($c);
            array_push($color_hex, color_name_to_hex($c));
        }
        $color_hex_str = implode(',', $color_hex);
        $i = 0;
        foreach ($current_products as $current_product) {
            $variation_id = $current_product;
            $variation = new WC_Product_Variation($variation_id);
            $variations_res['id']= $variation_id;
            $variations_res['type'] = $variation->get_type();
            $variations_res['name'] = $variation->get_name();
            $variations_res['slug'] = $variation->get_slug();
            $variations_res['date_created'] = $variation->get_date_created();
            $variations_res['date_modified'] = $variation->get_date_modified();
            $variations_res['status'] = $variation->get_status();
            $variations_res['featured'] = $variation->get_featured();
            $variations_res['visibility'] = $variation->get_catalog_visibility();
            $variations_res['long_description'] = $variation->get_description();
            $variations_res['short_description'] = $variation->get_short_description();
            $variations_res['sku'] = $variation->get_sku();
            $variations_res['menu_order'] = $variation->get_menu_order();
            $variations_res['virtual'] = $variation->get_virtual();
            $variations_res['permalink'] = get_permalink($variation_id);
            $variations_res['tax_status'] = $variation->get_tax_status();
            $variations_res['tax_class'] = $variation->get_tax_class();
            $variations_res['manage_stock'] = $variation->get_manage_stock();
            $variations_res['stock_status'] = $variation->get_stock_status();
            $variations_res['back_orders'] = $variation->get_backorders();
            $variations_res['sold_individually'] = $variation->get_sold_individually();
            $variations_res['pruchase_note'] = $variation->get_purchase_note();
            $variations_res['shipping_class'] = $variation->get_shipping_class_id();
            $variations_res['weight'] = $variation->get_weight();
            $variations_res['length'] = $variation->get_length();
            $variations_res['width'] = $variation->get_width();
            $variations_res['height'] = $variation->get_height();
            $variations_res['dimensions'] = $variation->get_dimensions();
            $variations_res['upsell_ids'] = $variation->get_upsell_ids();
            $variations_res['cross_sell_ids'] = $variation->get_cross_sell_ids();
            $variations_res['parent_id'] = $variation->get_parent_id();
            $variations_res['regular_price'] = (float)$variation->get_regular_price();
            $variations_res['sale_price'] = (float)$variation->get_sale_price();
            $variations_res['price'] = (float)$variation->get_price();
            $variations_res['sale_date_from'] = $variation->get_date_on_sale_from();
            $variations_res['sale_date_to'] = $variation->get_date_on_sale_to();
            $variations_res['total_sales'] = $variation->get_total_sales();
            $variations_res['quantity'] = $variation->get_stock_quantity();
            $variations_res['product_image'] =  get_the_post_thumbnail( $variation );
            $variations_res['product_image_id'] = $variation->get_image_id();
            $variations_res['product_images_ids'] = $variation->get_gallery_image_ids();
            $variations_res['reviews_allowed'] = $variation->get_reviews_allowed();
            $variations_res['rating_counts'] = $variation->get_rating_counts();
            $variations_res['average_rating'] = $variation->get_average_rating();
            $variations_res['review_count'] = $variation->get_review_count();
            $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
            if(in_array($variation_id,  $favourite_products)) {
                $variations_res['is_favorite'] = true;
            } else {
                $variations_res['is_favorite'] = false;
            }
            $terms    = wp_get_post_terms($variation_id); // Get terms for the product
            if (!empty($terms))
            {
                foreach ($terms as $term)
                {
                    $meta_data = get_term_meta($term->term_id); // Get all meta data
                    if(!empty($meta_data)) {
                        $variations_res['meta_data'][] = $meta_data;
                    } else {
                        $variations_res['meta_data'][] = "";
                    }
                }
            }
            if ($variations_res['quantity'] == null) {
                $variations_res['quantity'] = '';
            }
            $variations_res['stock'] = $variation->get_stock_quantity();

            $attributes = array();
            foreach ($variation->get_attributes() as $attribute_name => $attribute ) {
                // taxonomy-based attributes are prefixed with `pa_`, otherwise simply `attribute_`
                $hex = color_name_to_hex($attribute);
                $id = get_attribute_id_from_name(wc_attribute_label( str_replace( 'attribute_', '', $attribute_name ), $variation ));
                $attributes[] = array(
                    'id'     => $id,
                    'name'   => wc_attribute_label( str_replace( 'attribute_', '', $attribute_name ), $variation ),
                    'slug'   => str_replace( 'attribute_', '', wc_attribute_taxonomy_slug( $attribute_name ) ),
                    'option' => $hex,
                );
            }

            $variations_res['attributes'] = $attributes;
            $variations_array['product_variation'][$i] = $variations_res;
            $i++;
            //$response [] = $variations_res;
        }
        $response [] = $variations_array;
    }
    return new WP_REST_Response($response , 200);
}

// get user orders
function get_user_orders() {
    $current_user_id = check_loggedin_user();
    $args = array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'orderby'     => 'date',
        'order'       => 'DESC',
        'meta_value'  => $current_user_id,
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys(wc_get_order_statuses()),
        //'post_status' => array('wc-processing'),
    );
    $customer_orders = get_posts($args);
    $Order_arr = [];
    foreach ($customer_orders as $customer_order) {
        $order = wc_get_order($customer_order);
        $Order_arr[] = [
            "id"     => $order->get_id(),
            "Total"  => $order->get_total(),
            "Status" => $order->get_status(),
            "Date"   => $order->get_date_created()->date_i18n('Y-m-d'),
        ];

    }
    return new WP_REST_Response($Order_arr , 200);
}

// get order details
function get_order_details($data) {
    $current_user_id = check_loggedin_user();
    $order_id = $data['id'];
    $args = array(
        'meta_key' => '_customer_user',
        'meta_value' => $current_user_id,
        'post_status' => array_keys(wc_get_order_statuses()),
        'numberposts' => -1
    );

    // Getting current customer orders
    $customer_orders = wc_get_orders($args);
    $order_arr = array();
    foreach($customer_orders as $order) {
        if($order_id == $order->id) {
            $order_arr['id']               = $order->id;
            $order_arr['order_status']     = $order->post_status;
            $order_arr['billing_address']  = $order->formatted_billing_address;
            $order_arr['shipping_address'] = $order->formatted_shipping_address;
            $order_arr['payment_method']   = get_post_meta($order->id, '_payment_method', true);
            $items = $order->get_items();
            $i = 0;
            foreach ( $items as $item_id => $item_data ) {
                $product  = $item_data->get_product();
                // Only for product variation
                if($product->is_type('variation')) {
                    // Get the variation attributes
                    $variation_attributes = $product->get_variation_attributes();
                    // Loop through each selected attributes
                    foreach($variation_attributes as $attribute_taxonomy => $term_slug ) {
                        // Get product attribute name or taxonomy
                        $taxonomy = str_replace('attribute_', '', $attribute_taxonomy );
                        // The label name from the product attribute
                        $attribute_name = wc_attribute_label( $taxonomy, $product );
                        // The term name (or value) from this attribute
                        if( taxonomy_exists($taxonomy) ) {
                            $attribute_value = get_term_by( 'slug', $term_slug, $taxonomy )->name;
                        } else {
                            $attribute_value = $term_slug; // For custom product attributes
                        }
                    }

                } else {
                    $attribute_name = "";
                    $attribute_value = "";
                }
                $order_arr['items'][$i] = [
                    "item_id"    => $item_id,
                    "product_id" => $item_data['product_id'],
                    "name"       => $item_data['name'],
                    //"price"      => get_post_meta($item_id, '_sale_price', true),
                    "quantity"   => $order->get_item_meta($item_id, '_qty', true),
                    "line_total" => $order->get_item_meta($item_id, '_line_total', true),
                    'product_attributes'  => [
                        // 'color'           => $product->get_attribute('pa_color'),
                        // 'size'            => $product->get_attribute('pa_size'),
                        // 'brand'           => $product->get_attribute('pa_brand'),
                        $attribute_name => $attribute_value
                    ]
                ];
                $i++;
            }
        }
    }
    return new WP_REST_Response($order_arr , 200);
}

// Insert User Address
function post_user_address (WP_REST_Request $request) {
    $fields = array();
    $response = array();
    $current_user_id = check_loggedin_user();
    $error = new WP_Error();
    $parameters                   = $request->get_json_params();

    $fields['full-name']          = sanitize_text_field($parameters['full-name']);
    $fields['mobile-number']      = sanitize_text_field($parameters['mobile-number']);
    $fields['country']            = sanitize_text_field($parameters['country']);
    $fields['city']               = sanitize_text_field($parameters['city']);

    $fields['neighborhood']       = sanitize_text_field($parameters['neighborhood']);
    $fields['street']             = sanitize_text_field($parameters['street']);
    $fields['build-no']           = sanitize_text_field($parameters['build-no']);
    $fields['zip-code']           = sanitize_text_field($parameters['zip-code']);

    $fields['billing-address-1']  = sanitize_text_field($parameters['billing-address-1']);
    $fields['billing-address-2']  = sanitize_text_field($parameters['billing-address-2']);
    $fields['shipping-address-1'] = sanitize_text_field($parameters['shipping-address-1']);
    $fields['shipping-address-2'] = sanitize_text_field($parameters['shipping-address-2']);
    $customer = new WC_Customer($current_user_id);

    if (!empty($parameters['full-name'])) {
        update_user_meta($current_user_id, 'full-name', $fields['full-name']);
    } else {
        $error->add(400, __('Please Insert Full Name', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['mobile-number'])) {
        update_user_meta($current_user_id, 'mobile-number', $fields['mobile-number']);
    } else {
        $error->add(400, __('Please Insert Mobile Number', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['country'])) {
        update_user_meta($current_user_id, 'country', $fields['country']);
    } else {
        $error->add(400, __('Please Insert Country', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['city'])) {
        update_user_meta($current_user_id, 'city', $fields['city']);
    } else {
        $error->add(400, __('Please Insert City', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['neighborhood'])) {
        update_user_meta($current_user_id, 'neighborhood', $fields['neighborhood']);
    } else {
        $error->add(400, __('Please Insert Neighborhood', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['street'])) {
        update_user_meta($current_user_id, 'street', $fields['street']);
    } else {
        $error->add(400, __('Please Insert Street', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['build-no'])) {
        update_user_meta($current_user_id, 'build-no', $fields['build-no']);
    } else {
        $error->add(400, __('Please Insert Build No.', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['zip-code'])) {
        update_user_meta($current_user_id, 'zip-code', $fields['zip-code']);

    } else {
        $error->add(400, __('Please Insert Zip Code', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['billing-address-1'])) {
        $customer->set_billing_address_1($fields['billing-address-1']);
    } else {
        $error->add(400, __('Please Insert Billing Address One', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['billing-address-2'])) {
        $customer->set_billing_address_2($fields['billing-address-2']);
    } else {
        $error->add(400, __('Please Insert Billing Address Two', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['shipping-address-1'])) {
        $customer->set_shipping_address_1($fields['shipping-address-1']);
    } else {
        $error->add(400, __('Please Insert Shipping Address One', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!empty($parameters['shipping-address-2'])) {
        $customer->set_shipping_address_2($fields['shipping-address-2']);
    } else {
        $error->add(400, __('Please Insert Shipping Address One', 'wp-rest-user'), array('status' => 400));
        return $error;
    }

    $insert = $customer->save();
    if($insert) {
        $response['code'] = 200;
        $response['message'] = __("Address was Successfully Inserted", "wp-rest-user");
    }
    return new WP_REST_Response($response, 123);
}

// get User Address
function get_user_address() {
    $current_user_id = check_loggedin_user();
    $current_user_id = 13;
    
    $response = [];
    $first_name   = get_user_meta( $current_user_id, 'billing_first_name', true );
    $last_name   = get_user_meta( $current_user_id, 'billing_last_name', true );
    $full_name       = get_user_meta( $current_user_id, 'full-name', true );
    $mobile_number   = get_user_meta( $current_user_id, 'mobile-number', true );
    $phone   = get_user_meta( $current_user_id, 'billing_phone', true );
    $billing_country         = get_user_meta( $current_user_id, 'billing_country', true );
    $country         = get_user_meta( $current_user_id, 'country', true );
    $city            = get_user_meta( $current_user_id, 'city', true );
    $billing_city            = get_user_meta( $current_user_id, 'billing_city', true );
    $neighborhood    = get_user_meta( $current_user_id, 'neighborhood', true );
    $street          = get_user_meta( $current_user_id, 'street', true );
    $build_no        = get_user_meta( $current_user_id, 'build-no', true );
    $zip_code        = get_user_meta( $current_user_id, 'zip-code', true );
    $billing_postcode        = get_user_meta( $current_user_id, 'billing_postcode', true );
    $b_address_1     = get_user_meta( $current_user_id, 'billing_address_1', true );
    $b_address_2     = get_user_meta( $current_user_id, 'billing_address_2', true );
    $s_address_1     = get_user_meta( $current_user_id, 'shipping_address_1', true );
    $s_address_2     = get_user_meta( $current_user_id, 'shipping_address_2', true );
    $address_arr = array(
        "full_name"          => ($full_name?$full_name:$first_name.' '.$last_name ),
        "mobile_number"      => ($mobile_number?$mobile_number:$phone),
        "country"            => ($country?$country:$billing_country),
        "city"               => ($city?$city:$billing_city),
        "neighborhood"       => $neighborhood,
        "street"             => $street,
        "build_no"           => $build_no,
        "zip_code"           => ($zip_code?$zip_code:$billing_postcode),
        "billing_address_1"  => $b_address_1,
        "billing_address_2"  => $b_address_2,
        "shipping_address_1" => $s_address_1,
        "shipping_address_2" => $s_address_2
    );
    $response [] = $address_arr;
    return new WP_REST_Response($response, 123);
}

// delete User Address
function delete_user_address () {
    $current_user_id = check_loggedin_user();
    $response = [];
    $full_name       = delete_user_meta($current_user_id, 'full-name');
    $mobile_number   = delete_user_meta($current_user_id, 'mobile-number');
    $country         = delete_user_meta($current_user_id, 'country');
    $city            = delete_user_meta($current_user_id, 'city');
    $neighborhood    = delete_user_meta($current_user_id, 'neighborhood');
    $street          = delete_user_meta($current_user_id, 'street');
    $build_no        = delete_user_meta($current_user_id, 'build-no');
    $zip_code        = delete_user_meta($current_user_id, 'zip-code');
    $b_address_1     = delete_user_meta($current_user_id, 'billing_address_1');
    $b_address_2     = delete_user_meta($current_user_id, 'billing_address_2');
    $s_address_1     = delete_user_meta($current_user_id, 'shipping_address_1');
    $s_address_2     = delete_user_meta($current_user_id, 'shipping_address_2');
    if($full_name && $mobile_number &&
        $country && $city && $neighborhood &&
        $street && $build_no && $zip_code &&
        $b_address_1 && $b_address_2 && $s_address_1 && $s_address_2) {
        $response['code'] = 200;
        $response['message'] = __("Address was Successfully Deleted", "wp-rest-user");
    }
    return new WP_REST_Response($response, 123);
}

// create Order
function wc_order_add_discount( $order_id, $title, $amount, $tax_class = '' ) {
    $order    = wc_get_order($order_id);
    $subtotal = $order->get_subtotal();
    $item     = new WC_Order_Item_Fee();

    if ( strpos($amount, '%') !== false ) {
        $percentage = (float) str_replace( array('%', ' '), array('', ''), $amount );
        $percentage = $percentage > 100 ? -100 : -$percentage;
        $discount   = $percentage * $subtotal / 100;
    } else {
        $discount = (float) str_replace( ' ', '', $amount );
        $discount = $discount > $subtotal ? -$subtotal : -$discount;
    }

    $item->set_tax_class( $tax_class );
    $item->set_name( $title );
    $item->set_amount( $discount );
    $item->set_total( $discount );

    if ( '0' !== $item->get_tax_class() && 'taxable' === $item->get_tax_status() && wc_tax_enabled() ) {
        $tax_for   = array(
            'country'   => $order->get_shipping_country(),
            'state'     => $order->get_shipping_state(),
            'postcode'  => $order->get_shipping_postcode(),
            'city'      => $order->get_shipping_city(),
            'tax_class' => $item->get_tax_class(),
        );
        $tax_rates = WC_Tax::find_rates( $tax_for );
        $taxes     = WC_Tax::calc_tax( $item->get_total(), $tax_rates, false );
        print_pr($taxes);

        if ( method_exists( $item, 'get_subtotal' ) ) {
            $subtotal_taxes = WC_Tax::calc_tax( $item->get_subtotal(), $tax_rates, false );
            $item->set_taxes( array( 'total' => $taxes, 'subtotal' => $subtotal_taxes ) );
            $item->set_total_tax( array_sum($taxes) );
        } else {
            $item->set_taxes( array( 'total' => $taxes ) );
            $item->set_total_tax( array_sum($taxes) );
        }
        $has_taxes = true;
    } else {
        $item->set_taxes( false );
        $has_taxes = false;
    }
    $item->save();

    $order->add_item( $item );
    $order->calculate_totals( $has_taxes );
    $order->save();
}
function create_order (WP_REST_Request $request) {
    $fields = array();
    $response = array();
    $current_user_id = check_loggedin_user();
    $current_user_id = 87;
    $error = new WP_Error();
    $parameters = $request->get_json_params();
    if (!$parameters['payment_cod'] ) {
        $error->add(400, __('Please fill payment method', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!$parameters['address_1'] && !$parameters['city']) {
        $error->add(400, __('Please fill Address and City', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!$current_user_id) {
        $error->add(400, __('Please add user Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!$parameters['product_list']) {
        $error->add(400, __('Need to specify a product Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }

    if (!$parameters['coupon_code']) {
        $error->add(400, __('Need to specify a Coupon Code', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if (!$parameters['coupon_amount']) {
        $error->add(400, __('Need to specify a Coupon Amount', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    $user_info = get_user_by('id',$current_user_id);
    $address = array(
        'first_name'  => $user_info->first_name,
        'last_name'   => $user_info->last_name,
        'company'     => sanitize_text_field($parameters['company']),
        'email'       => $user_info->user_email,
        'phone'       => get_user_meta($current_user_id,'billing_phone',true),
        'address_1'   => sanitize_text_field($parameters['address_1']),
        'address_2'   => sanitize_text_field($parameters['address_2']),
        'city'        => sanitize_text_field($parameters['city']),
        'state'       => sanitize_text_field($parameters['state']),
        'postcode'    => sanitize_text_field($parameters['postcode']),
        'country'     => sanitize_text_field($parameters['country']),
    );
    $fields['product_list']   = $parameters['product_list'];
    $fields['coupon_code']    = sanitize_text_field($parameters['coupon_code']);
    $fields['coupon_amount']  = sanitize_text_field($parameters['coupon_amount']);

    //qty, size, color
    $order = wc_create_order();
    foreach($fields['product_list'] as $key=>$product) {
        $product_obj = wc_get_product($product['id']);
        //    var_dump($product_obj);
        //    exit;
        if (!$product_obj->is_type('variable')) {
            update_post_meta($product['id'], "_stock", (get_post_meta($product['id'], "_stock", true) - 1));
        }
        $order->add_product($product_obj,  $product['qty']);
        $order->set_address($address, 'billing');
        $order->set_address($address, 'shipping');
    }

    /*
        * Create coupon
    */
    $discount_type = 'fixed_cart'; // Type: fixed_cart, percent, fixed_product, percent_product
    $coupon = array(
        'post_title'   =>$fields['coupon_code'],
        'post_content' => '',
        'post_status'  => 'publish',
        'post_author'  => 1,
        'post_type'    => 'shop_coupon'
    );

    $new_coupon_id = wp_insert_post($coupon);

    // Add meta
    update_post_meta($new_coupon_id, 'discount_type', $discount_type);
    update_post_meta($new_coupon_id, 'coupon_amount', $fields['coupon_amount']);
    update_post_meta($new_coupon_id, 'individual_use', 'no');
    update_post_meta($new_coupon_id, 'product_ids', '');
    update_post_meta($new_coupon_id, 'exclude_product_ids', '');
    update_post_meta($new_coupon_id, 'usage_limit', '1');
    update_post_meta($new_coupon_id, 'expiry_date', '');
    update_post_meta($new_coupon_id, 'apply_before_tax', 'yes');
    update_post_meta($new_coupon_id, 'free_shipping', 'no');
    $order->add_coupon($fields['coupon_code'], $fields['coupon_amount']);
    $order->calculate_totals();
    // $order->set_total($order->calculate_totals() - $fields['coupon_amount']);
    // $order->set_total($fields['coupon_amount'], 'Fixed discount');
    //$order_id = new WC_Order($order->ID);
    //wc_order_add_discount($order_id, __("Fixed discount"), $fields['coupon_amount']);
    $order_id = trim(str_replace('#', '', $order->get_order_number()));
    $pay_cod = $parameters['payment_cod'];
    $Delivery_date = $parameters['delivery_date'];
    add_post_meta($order_id, '_payment_method', $pay_cod);
    // update_post_meta($order_id, '_created_via', 'checkout');
    update_post_meta($order_id, '_customer_user', $current_user_id);
    update_post_meta($order_id, 'Delivery Date', $Delivery_date);
    add_post_meta($order_id, '_payment_method_title', 'hyperpay');
    
    // Store Order ID in session so it can be re-used after payment failure
    //WC()->session->order_awaiting_payment = $order->ID;

    // Process Payment
    // process_payment($order_id);
    $payment_gateways = WC()->payment_gateways->payment_gateways();
    $order->set_payment_method($payment_gateways['hyperpay']);
    $available_gateways = WC()->payment_gateways->get_available_payment_gateways();
    $result = $available_gateways[$pay_cod]->process_payment($order_id);
    $result2 = $available_gateways[$pay_cod]->receipt_page($order_id);
    

   // $order = wc_get_order($order_id);
    
    //$pay_now_url = esc_url( $order->get_checkout_payment_url());
   
    $response['code'] = $result2 ;
  //  $response['pay_cod'] = $available_gateways[$pay_cod]->process_payment();
    
    
    $response['result'] =  $result ;
    $response['message'] = __("Order was Successfully Created", "wp-rest-user");
    return new WP_REST_Response($response, 123);
}

// get payment methods
function get_payment_methods () {
    $installed_payment_methods = WC()->payment_gateways->payment_gateways();
    $options_arr = array();
    $response = [];
    foreach( $installed_payment_methods as $id => $method ) {
        $options_arr['id'] = $id;
        $options_arr['name'] = $method->title;
    }
    $response [] = $options_arr;
    return new WP_REST_Response($response, 123);
}

// Add Product to favourite 
function post_wishlist (WP_REST_Request $request) {
    $fields = array();
    $response = array();
    $current_user_id = check_loggedin_user();
    $error = new WP_Error();
    $parameters = $request->get_json_params();
    if(empty($parameters['product_id'])) {
        $error->add(400, __('Please Insert Product Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    $fields['product-id']  = sanitize_text_field($parameters['product_id']);
    $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
    if(empty($favourite_products))
    {
        $fav_prod = add_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', array());
        $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
    }
    array_push($favourite_products, $fields['product-id']);
    $fav_prod = update_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', $favourite_products);
    if($fav_prod) {
        $response['code'] = 200;
        $response['message'] = __("Product was Successfully Added To Favourite", "wp-rest-user");
    }
    return new WP_REST_Response($response, 123);
}

// get wishlist
function get_wishlist () {
    $current_user_id = check_loggedin_user();
    $fav_products_arr = array();
    $response   = array();
    $favourite_products = get_user_meta($current_user_id, 'user_'.$current_user_id.'_favlist', true);
    $return = [];
    if (empty($favourite_products)) {
        return $return;
    } else {
        $data = [];
        foreach ($favourite_products as $product_id) {
            $product    = wc_get_product($product_id);
            if( $product->is_type('simple')) {
                $data = [];
                $product_attributes      = $product->get_attributes(); // Get the product attributes
                $data['product_name']    = $product->name;
                $data['date_created']    = $product->date_created;
                $data['date_created']    = $product->date_created;
                $data['description']     = $product->description;
                $data['sku']             = $product->sku;
                $data['sale_price']      = $product->sale_price;
                $data['regular_price']   = $product->regular_price;
                $data['total_sales']     = $product->total_sales;
                $data['stock_quantity']  = $product->stock_quantity;
                $data['product_img']     = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
                $colors = $product->get_attribute('pa_color');
                $colors_arr = explode(',', $colors);
                $color_hex = [];
                foreach($colors_arr as $c) {
                    $hex = color_name_to_hex($c);
                    array_push($color_hex, color_name_to_hex($c));
                }
                $color_hex_str = implode(',', $color_hex);
                $data['product_attributes']  = [
                    'color'           => $color_hex_str,
                    'size'            => $product->get_attribute('pa_size'),
                    'brand'           => $product->get_attribute('pa_brand'),
                ];
                $response[] = $data;
            }
            elseif( $product->is_type('variable'))
            {
                $data = [];
                $current_products = $product->get_children();
                $product_attributes = $product->get_attributes(); // Get the product attributes
                $data['product_name']    = $product->name;
                $data['date_created']    = $product->date_created;
                $data['date_created']    = $product->date_created;
                $data['description']     = $product->description;
                $data['sku']             = $product->sku;
                $data['sale_price']      = $product->sale_price;
                $data['regular_price']   = $product->regular_price;
                $data['total_sales']     = $product->total_sales;
                $data['stock_quantity']  = $product->stock_quantity;
                $data['product_img']     = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
                $colors = $product->get_attribute('pa_color');
                $colors_arr = explode(',', $colors);
                $color_hex = [];
                foreach($colors_arr as $c) {
                    $hex = color_name_to_hex($c);
                    array_push($color_hex, color_name_to_hex($c));
                }
                $color_hex_str = implode(',', $color_hex);
                $data['product_attributes']  = [
                    'color'           => $color_hex_str,
                    'size'            => $product->get_attribute('pa_size'),
                    'brand'           => $product->get_attribute('pa_brand'),
                ];
                $i = 0;
                foreach($current_products as $current_product) {
                    $child_product      = wc_get_product($current_product);
                    $colors = $child_product->get_attribute('pa_color');
                    $colors_arr = explode(',', $colors);
                    $color_hex = [];
                    foreach($colors_arr as $c) {
                        $hex = color_name_to_hex($c);
                        array_push($color_hex, color_name_to_hex($c));
                    }
                    $color_hex_str = implode(',', $color_hex);
                    $product_attributes = $child_product->get_attributes(); // Get the product attributes
                    $data['product_variation'][$i] = [
                        'product_id'          => $current_product,
                        'product_name'        => $child_product ->name,
                        'date_created'        => $child_product->date_created,
                        'date_created'        => $child_product->date_created,
                        'description'         => $child_product->description,
                        'sku'                 => $child_product->sku,
                        'sale_price'          => $child_product->sale_price,
                        'regular_price'       => $child_product->regular_price,
                        'total_sales'         => $child_product->total_sales,
                        'stock_quantity'      => $child_product->stock_quantity,
                        'product_img'         => wp_get_attachment_image_src(get_post_thumbnail_id($child_product->id), 'single-post-thumbnail'),
                        'product_attributes'  => [
                            'color'           => $color_hex_str,
                            'size'            => $child_product->get_attribute('pa_size'),
                            'brand'           => $child_product->get_attribute('pa_brand'),
                        ]
                    ];
                    $i++;
                }
                $response[] = $data;
            }
        }
        return new WP_REST_Response($response , 200);
        //return $return;
    } // end else
    //$fav_products_arr = $favourite_products;
    //return new WP_REST_Response($fav_products_arr, 123); 
}

//get support tickets by user Id
function get_tickets() {
    global $wpdb;
    $current_user_id = check_loggedin_user();
    $current_user_id = 1;
    $response   = array();
    $sql = "SELECT * FROM xwt_wcfm_support WHERE customer_id = '$current_user_id'";
    $get_support_tickets = $wpdb->get_results($sql);
    $data = [];
    foreach($get_support_tickets as $ticket) {
        $data['ticket_id']       = $ticket->ID;
        $data['order_id']        = $ticket->order_id;
        $data['item_id']         = $ticket->item_id;
        $data['product_id']      = $ticket->product_id;
        $data['author_id']       = $ticket->author_id;
        $data['vendor_id']       = $ticket->vendor_id;
        $data['customer_id']     = $ticket->customer_id;
        $data['customer_name']   = $ticket->customer_name;
        $data['customer_email']  = $ticket->customer_email;
        $data['category']        = $ticket->category;
        $data['priority']        = $ticket->priority;
        $data['status']          = $ticket->status;
        $data['posted']          = $ticket->posted;
        $response [] = $data;
    }
    return new WP_REST_Response($response , 200);
}

// Add support tickets by user Id 
function upload_from_file( $files, $headers ) {

    if ( empty( $files ) ) {
        return new WP_Error( 'rest_upload_no_data', __( 'No data supplied.' ), array( 'status' => 400 ) );
    }
// Verify hash, if given.
    if ( ! empty( $headers['content_md5'] ) ) {
        $content_md5 = array_shift( $headers['content_md5'] );
        $expected    = trim( $content_md5 );
        $actual      = md5_file( $files['file']['tmp_name'] );
        if ( $expected !== $actual ) {
            return new WP_Error( 'rest_upload_hash_mismatch', __( 'Content hash did not match expected.' ), array( 'status' => 412 ) );
        }
    }
    // Pass off to WP to handle the actual upload.
    $overrides = array(
        'test_form' => false,
    );
    // Bypasses is_uploaded_file() when running unit tests.
    if ( defined( 'DIR_TESTDATA' ) && DIR_TESTDATA ) {
        $overrides['action'] = 'wp_handle_mock_upload';
    }
    /** Include admin functions to get access to wp_handle_upload() */
    require_once ABSPATH . 'wp-admin/includes/admin.php';
    $file = wp_handle_upload( $files['file'], $overrides );
    if ( isset( $file['error'] ) ) {
        return new WP_Error( 'rest_upload_unknown_error', $file['error'], array( 'status' => 500 ) );
    }
    return $file;
}

function post_tickets (WP_REST_Request $request) {
    global $wpdb;
    $fields = array();
    $response = array();
    $current_user_id = check_loggedin_user();
    $current_user_id = 27;
    $error = new WP_Error();
    $parameters = $request->get_params();
    if(empty($parameters['order_id'])) {
        $error->add(400, __('Please Insert Order Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['item_id'])) {
        $error->add(400, __('Please Insert Item Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['product_id'])) {
        $error->add(400, __('Please Insert Product Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['author_id'])) {
        $error->add(400, __('Please Insert Author Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['customer_name'])) {
        $error->add(400, __('Please Insert customer name', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['customer_email'])) {
        $error->add(400, __('Please Insert customer Email', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['query'])) {
        $error->add(400, __('Please Insert query', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['category'])) {
        $error->add(400, __('Please Insert Category', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['priority'])) {
        $error->add(400, __('Please Insert Priority', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['status'])) {
        $error->add(400, __('Please Insert Status', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($parameters['date'])) {
        $error->add(400, __('Please Insert Date', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    $fields['order_id']  = sanitize_text_field($parameters['order_id']);
    $fields['item_id']  = sanitize_text_field($parameters['item_id']);
    $fields['product_id']  = sanitize_text_field($parameters['product_id']);
    $fields['author_id']  = sanitize_text_field($parameters['author_id']);
    $fields['vendor_id']  = sanitize_text_field($parameters['vendor_id']);
    $fields['customer_id']  = $current_user_id;
    $fields['customer_name']  = sanitize_text_field($parameters['customer_name']);
    $fields['customer_email']  = sanitize_text_field($parameters['customer_email']);
    $fields['query']  = sanitize_text_field($parameters['query']);
    $fields['category']  = sanitize_text_field($parameters['category']);
    $fields['priority']  = sanitize_text_field($parameters['priority']);
    $fields['status']  = sanitize_text_field($parameters['status']);
    $fields['posted']  = sanitize_text_field($parameters['date']);
    $table = 'xwt_wcfm_support';
    $args = array(
        'order_id'       => $fields['order_id'],
        'item_id'        => $fields['item_id'],
        'product_id'     => $fields['product_id'],
        'author_id'      => $fields['author_id'],
        'vendor_id'      => $fields['vendor_id'],
        'customer_id'    => $fields['customer_id'],
        'customer_name'  => $fields['customer_name'],
        'customer_email' => $fields['customer_email'],
        'query'          => $fields['query'],
        'category'       => $fields['category'],
        'priority'       => $fields['priority'],
        'status'         => $fields['status'],
        'posted'         => $fields['posted']
    );

    $insert_support = $wpdb->insert($table, $args);
    // Get the file via $_FILES or raw data.
    $files   = $request->get_file_params();
    $headers = $request->get_headers();
    if (!empty($files)) {
        $file = upload_from_file( $files, $headers );
    }
    if ( is_wp_error( $file ) ) {
        return $file;
    }
    $name       = basename( $file['file'] );
    $name_parts = pathinfo( $name );
    $name       = trim( substr( $name, 0, - ( 1 + strlen( $name_parts['extension'] ) ) ) );
    $url        = $file['url'];
    $type       = $file['type'];
    $file       = $file['file'];

    $order_id    = $fields['order_id'];
    $item_id     = $fields['item_id'];
    $product_id  = $fields['product_id'];
    $customer_id = $fields['customer_id'];
    $sql = "SELECT ID FROM xwt_wcfm_support WHERE order_id = '$order_id' and item_id = '$item_id' and product_id = '$product_id' and customer_id = '$customer_id'";
    $id = $wpdb->get_row($sql);
    $suport_id = $id->ID;
    $table = 'xwt_wcfm_support_meta';
    $args = array(
        'support_id' => $suport_id,
        'key'        => 'attchment',
        'value'      => $file
    );
    $insert_support_meta = $wpdb->insert($table, $args);
    if($insert || $insert_support_meta) {
        $response['code'] = 200;
        $response['message'] = __("Ticket was Successfully Created", "wp-rest-user");
    }
    return new WP_REST_Response($response, 123);
}

function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}


function validate_token(){

    $auth = isset($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] : false;

    /* Double check for different auth header string (server dependent) */
    if (!$auth) {
        $auth = isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION']) ? $_SERVER['REDIRECT_HTTP_AUTHORIZATION'] : false;
    }

    if (!$auth) {
        return false;
    }
    return true;
}

function site_info(){
    $response = [];
    $main_phone       = get_option('main_phone' );
    $main_mail   = get_option('main_mail' );

    $address_arr = array(
        "phone"          => $main_phone ,
        "main mail"      => $main_mail,
    );
    $response [] = $address_arr;
    return new WP_REST_Response($response, 123);
}
function get_user_order($id)
{
    $w = $id['id'];
    $customer = wp_get_current_user();
    if (empty($w)) {
        return  "enter user id";
    }
    // Get all customer orders
    $customer_orders = get_posts(array(
        'numberposts' => -1,
        'meta_key' => '_customer_user',
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_value' => $w,
        'post_type' => wc_get_order_types(),
        'post_status' => array_keys(wc_get_order_statuses()),
        //  'post_status' => array('wc-processing'),
    ));

    $Order_Array = [];
    $data = [];
    $i = 0;
    foreach ($customer_orders as $customer_order) {
       
        $orderq = wc_get_order($customer_order);
        $state =$orderq->get_Status();
        // $Order_Array[] = [
        //   "ID" => $orderq->get_id(),
        //   "Value" => $orderq->get_total(),
        //   "Date" => $orderq->get_date_created()->date_i18n('Y-m-d'),
        //   "Status" => $state,
        //   "payment_method" => $orderq->get_payment_method_title()
        // ];
        // $Delivery = get_post_meta(  $orderq->get_id(), 'Delivery Date', true );
        // // Check if the custom field has a value.
        // if ( ! empty( $Delivery ) ) {
        //     echo $Delivery;
        // }
        $data[$i]['id'] = $orderq->get_id();
        $data[$i]['Value'] = $orderq->get_total();
        $data[$i]['Date'] = $orderq->get_date_created()->date_i18n('Y-m-d');
        $data[$i]['Delivery Date'] ="sss";
        $data[$i]['Status'] =  $state;
        $data[$i]['payment_method'] = $orderq->get_payment_method_title();
        $items = $orderq->get_items();
        $product_id = [];
        foreach ( $items as $item_data ) {
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $item_data['product_id'] ), 'single-post-thumbnail' );
            $product_id []  = $image[0];
        }
        $data[$i]['images'] = $product_id ;
        $i++;
    }

    return  	$data;
}
add_action('rest_api_init', function () {
    register_rest_route('app/v1', 'user_order/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_user_order',
        //'permission_callback' => function($request){return validate_token();}
    ));
});
function get_private_order_notes( $order_id){
    global $wpdb;

    $table_perfixed = $wpdb->prefix . 'comments';
    $results = $wpdb->get_results("
        SELECT *
        FROM $table_perfixed
        WHERE  `comment_post_ID` = $order_id
        AND  `comment_type` LIKE  'order_note'
    ");

    foreach($results as $note){
        $order_note[]  = array(
            //'note_id'      => $note->comment_ID,
            'note_date'    => $note->comment_date,
            //'note_author'  => $note->comment_author,
            'note_content' => $note->comment_content,
        );
    }
    return $order_note;
}
function get_order($id)
{
    $order_id = $id['id'];
    $customer = wp_get_current_user();
    $current_user_id = check_loggedin_user();
    $Order_Array = [];
    $order = wc_get_order($order_id);
    $order_data = array(
        'order_id' => $order->get_id(),
        'track_order' => get_private_order_notes($order_id ),
        'order_number' => $order->get_order_number(),
        'order_date' => date('Y-m-d H:i:s', strtotime(get_post($order->get_id())->post_date)),
        'status' => $order->get_status(),
        'shipping_total' => $order->get_total_shipping(),
        'shipping_tax_total' => wc_format_decimal($order->get_shipping_tax(), 2),
        'fee_total' => wc_format_decimal($fee_total, 2),
        'fee_tax_total' => wc_format_decimal($fee_tax_total, 2),
        'tax_total' => wc_format_decimal($order->get_total_tax(), 2),
        'cart_discount' => (defined('WC_VERSION') && (WC_VERSION >= 2.3)) ? wc_format_decimal($order->get_total_discount(), 2) : wc_format_decimal($order->get_cart_discount(), 2),
        'order_discount' => (defined('WC_VERSION') && (WC_VERSION >= 2.3)) ? wc_format_decimal($order->get_total_discount(), 2) : wc_format_decimal($order->get_order_discount(), 2),
        'discount_total' => wc_format_decimal($order->get_total_discount(), 2),
        'order_total' => wc_format_decimal($order->get_total(), 2),
        'order_currency' => $order->get_currency(),
        'payment_method' => $order->get_payment_method(),
        'shipping_method' => $order->get_shipping_method(),
        'customer_id' => $order->get_user_id(),
        'customer_user' => $order->get_user_id(),
        'customer_email' => ($a = get_userdata($order->get_user_id() )) ? $a->user_email : '',
        'billing_first_name' => $order->get_billing_first_name(),
        'billing_last_name' => $order->get_billing_last_name(),
        'billing_company' => $order->get_billing_company(),
        'billing_email' => $order->get_billing_email(),
        'billing_phone' => $order->get_billing_phone(),
        'billing_address_1' => $order->get_billing_address_1(),
        'billing_address_2' => $order->get_billing_address_2(),
        'billing_postcode' => $order->get_billing_postcode(),
        'billing_city' => $order->get_billing_city(),
        'billing_state' => $order->get_billing_state(),
        'billing_country' => $order->get_billing_country(),
        'shipping_first_name' => $order->get_shipping_first_name(),
        'shipping_last_name' => $order->get_shipping_last_name(),
        'shipping_company' => $order->get_shipping_company(),
        'shipping_address_1' => $order->get_shipping_address_1(),
        'shipping_address_2' => $order->get_shipping_address_2(),
        'shipping_postcode' => $order->get_shipping_postcode(),
        'shipping_city' => $order->get_shipping_city(),
        'shipping_state' => $order->get_shipping_state(),
        'shipping_country' => $order->get_shipping_country(),
        'customer_note' => $order->get_customer_note(),
        'download_permissions' => $order->is_download_permitted() ? $order->is_download_permitted() : 0,
    );
    // 3) Get the order items
    $items = $order->get_items();
    $i = 0;
    foreach ( $items as $item_id => $item_data ) {
       // var_dump($item_data);
        $order_data['items'][$i]['name'] = $item_data['name'];
        $order_data['items'][$i]['product_id'] = $item_data['product_id'];
        $order_data['items'][$i]['quantity'] = $item_data['quantity'];
        $order_data['items'][$i]['total_price'] = $item_data['total'];
        // "quantity"   => $order->get_item_meta($item_id, '_qty', true),
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $item_data['product_id'] ), 'single-post-thumbnail' );
        $order_data['items'][$i]['product_image_url'] = $image[0];

        $i++;
    }
    return   $order_data;
}
function check_otp(){

    $user_id = sanitize_text_field($_REQUEST['user_id']);
    $otp_send = sanitize_text_field($_REQUEST['otp_code']);
    $user_otp = get_user_meta( $user_id, '_otp_nmber')[0];
    $error = new WP_Error();

    if(empty($user_id)) {
        $error->add(400, __('Please Insert user Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($otp_send)) {
        $error->add(400, __('Please Insert otp number', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if ($user_otp  == $otp_send ) {
        $response['code'] = 200;
        $response['message'] = __("verification sucsess", "wp-rest-user");
    }else {
        $response['code'] = 400;
        $response['message'] = __("verification failed please try again later", "wp-rest-user");
    }

    return new WP_REST_Response($response, 123);
}
function custom_sms_order3() {

    $customer_id =  $_REQUEST['user_id'];
    $user_phone =  $_REQUEST['user_phone'];
    // $otp = get_user_meta( $customer_id, '_otp_nmber');
    $new_value = rand(1,9999);
    update_user_meta( $customer_id, '_otp_nmber', $new_value);
    $error = new WP_Error();
    if(empty($customer_id)) {
        $error->add(400, __('Please Insert user Id', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    if(empty($user_phone)) {
        $error->add(400, __('user phone is requeried', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
    // if(empty($otp)) {
    //     $error->add(400, __('NO CODE FOR THIS USER', 'wp-rest-user'), array('status' => 400));
    //     return $error;
    // }
    $apiUrl = "http://basic.unifonic.com/rest/SMS/messages";
    $response = wp_remote_post($apiUrl, array(
            'method'      => 'POST',
            'timeout'     => 10000,
            'Content-Type'=>'application/json',
            'body'        => array(
                'SenderID'=>'Lakuom',
                'AppSid'=>'gPYh02oCoN9mzdgzQg343nGcfZY1Ho',
                'Body'=>'your otp code is '.$new_value,
                'Recipient'=>$user_phone
            ),
        )
    );

    if ( is_wp_error( $response ) ) {
        $error_message = $response->get_error_message();
        echo "Something went wrong: $error_message";
    }
    $responseX['code'] = 200;
    $responseX['message'] = $response['body'];
    return $responseX;
}
function lost_password($request) {
	$response = array();
	$parameters = $request->get_json_params();
	$user_login = sanitize_text_field($request['user_login']);
    $otp_number = sanitize_text_field($request['user_otp_number']);
	$error = new WP_Error();
 if(empty($otp_number)) {
        $error->add(400, __('ENTER OTP CODE ', 'wp-rest-user'), array('status' => 400));
        return $error;
    }
	if (empty($user_login)) {
		$error->add(400, __("The field 'user_login' is required.", 'wp-rest-user'), array('status' => 400));
		return $error;
	} else {
		$user_id = username_exists($user_login);
		if ($user_id == false) {
			$user_id = email_exists($user_login);
			if ($user_id == false) {
				$error->add(401, __("User '" . $user_login . "' not found.", 'wp-rest-user'), array('status' => 401));
				return $error;
			}
		}
	}
	// run the action
	// ==============================================================
	//do_action('retrieve_password', $user_login);
	$user = null;
	$email = "";
	if (strpos($user_login, '@')) {
		$user = get_user_by('email', $user_login);
		$email = $user_login;
	} else {
		$user = get_user_by('login', $user_login);
		$email = $user->user_email;
	}
    $otp = get_user_meta( $user_id, '_otp_nmber')[0];
    if($otp_number == $otp){
        $key = get_password_reset_key($user);
        $rp_link = '<a href="' . site_url() . "/wp-login.php?action=rp&key=$key&login=" . rawurlencode($user->user_login) . '">' . site_url() . "/wp-login.php?action=rp&key=$key&login=" . rawurlencode($user->user_login) . '';
    
        function wpdocs_set_html_mail_content_type() {
            return 'text/html';
        }
        add_filter('wp_mail_content_type', 'wpdocs_set_html_mail_content_type');
        $email_successful = wp_mail($email, 'Reset password', 'Click here in order to reset your password:<br><br>' . $rp_link);
    }
	// Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
	//remove_filter('wp_mail_content_type', 'wpdocs_set_html_mail_content_type');
	// ==============================================================
	if ($email_successful) {
		$response['code'] = 200;
		$response['message'] = __("Reset Password link had been send to your email.", "wp-rest-user");
	} else {
		$error->add(402, __("Failed to send Reset Password email. Check your WordPress Hosting Email Settings.", 'wp-rest-user'), array('status' => 402));
		return $error;
	}

	return new WP_REST_Response($response, 200);
}
add_action('rest_api_init', function () {
    register_rest_route('app/v1', 'user_order_details/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_order',
        //'permission_callback' => function($request){return validate_token();}
    ));
});
add_action('rest_api_init', function() {
      //  lostpassword
    register_rest_route('app/v1', 'users/lostpassword', array(
        'methods' => 'POST',
        'callback' => 'lost_password',
    ));
    // get categories
    register_rest_route('app/v1', 'categories', [
        'methods'  => 'GET',
        'callback' => 'get_all_categories',
    ]);

    // get top selling products 
    register_rest_route('app/v1', 'selling-products', [
        'methods'  => 'GET',
        'callback' => 'get_top_selling_products',
    ]);
    register_rest_route('app/v1', 'custom_sms', [
        'methods'  => 'POST',
        'callback' => 'custom_sms_order3',
    ]);

    register_rest_route('app/v1', 'check_otp', [
        'methods'  => 'POST',
        'callback' => 'check_otp',
    ]);
    // 
    // get recent products
    register_rest_route('app/v1', 'recent-products', [
        'methods'  => 'GET',
        'callback' => 'get_recent_products',
    ]);

    // get product by category
    register_rest_route( 'app/v1', 'product/category/(?P<slug>[^/]+)', array(
        'methods' => 'GET',
        'callback' => 'get_product_by_category',
    ));

    // login
    /*register_rest_route('app/v1', 'login', [
        'methods'  => 'POST',
        'callback' => 'login',
    ]);*/
    // get site info
    register_rest_route('app/v1', 'site_info', [
        'methods'  => 'GET',
        'callback' => 'site_info',
    ]);
    // register
    register_rest_route('app/v1', 'register', [
        'methods'  => 'POST',
        'callback' => 'register',
    ]);

    // get slider images
    register_rest_route('app/v1', 'slider-imgs', [
        'methods'  => 'GET',
        'callback' => 'get_slides',
    ]);

    // get related products depend on product Id 
    register_rest_route('app/v1', 'related-product/(?P<id>\d+)', [
        'methods'  => 'GET',
        'callback' => 'get_related_product',
    ]);

    // get customer reviews depend on product Id 
    register_rest_route('app/v1', 'get-customer-reviews/(?P<id>\d+)', [
        'methods'  => 'GET',
        'callback' => 'get_customer_reviews',
    ]);

    // post customer review
    register_rest_route('app/v1', 'post-customer-reviews', [
        'methods'  => 'POST',
        'callback' => 'post_customer_reviews',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // edit user profile 
    register_rest_route('app/v1', 'edit-user-profile', [
        'methods'  => 'POST',
        'callback' => 'edit_user_profile',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // get user profile
    register_rest_route('app/v1', 'get-user-profile', [
        'methods'  => 'GET',
        'callback' => 'get_user_profile',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // get products by attribute
    register_rest_route('app/v1', 'get-products/(?P<attribute>[a-zA-Z0-9-]+)', [
        'methods'  => 'GET',
        'callback' => 'get_products_by_attribute',
    ]);

    // get product details depend on product Id 
    register_rest_route('app/v1', 'get-product-details/(?P<id>\d+)', [
        'methods'  => 'GET',
        'callback' => 'get_product_details',
    ]);

    // get user orders 
    register_rest_route('app/v1', 'get-orders', [
        'methods'  => 'GET',
        'callback' => 'get_user_orders',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // get orders details by order id
    register_rest_route('app/v1', 'get-order-details/(?P<id>\d+)', [
        'methods'  => 'GET',
        'callback' => 'get_order_details',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // Delete User Address
    register_rest_route('app/v1', 'delete-user-address', [
        'methods'  => 'GET',
        'callback' => 'delete_user_address',
        'permission_callback' => function($request){return validate_token();}
    ]);
     // post-user-address User Address
     register_rest_route('app/v1', 'post-user-address', [
        'methods'  => 'GET',
        'callback' => 'post_user_address',
        'permission_callback' => function($request){return validate_token();}
    ]);
    
    // get User Addresses
    register_rest_route('app/v1', 'get-user-address', [
        'methods'  => 'GET',
        'callback' => 'get_user_address',
        //'permission_callback' => function($request){return validate_token();}
    ]);

    // Create Order
    register_rest_route('app/v1', 'create-order', [
        'methods'  => 'GET',
        'callback' => 'create_order',
       // 'permission_callback' => function($request){return validate_token();}
    ]);

    // get Payment Methods
    register_rest_route('app/v1', 'get-payment-methods', [
        'methods'  => 'GET',
        'callback' => 'get_payment_methods',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // Post WishList 
    register_rest_route('app/v1', 'post-wishlist', [
        'methods'  => 'POST',
        'callback' => 'post_wishlist',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // Get WishList 
    register_rest_route('app/v1', 'get-wishlist', [
        'methods'  => 'GET',
        'callback' => 'get_wishlist',
        'permission_callback' => function($request){return validate_token();}
    ]);

    // Get Support Tickets by UserId
    register_rest_route('app/v1', 'get-tickets', [
        'methods'  => 'GET',
        'callback' => 'get_tickets',
        'permission_callback' => function($request){return validate_token();}
    ]);
    // Post Support Tickets by UserId
    register_rest_route('app/v1', 'post-tickets', [
        'methods'  => 'POST',
        'callback' => 'post_tickets',
        'permission_callback' => function($request){return validate_token();}
    ]);
});