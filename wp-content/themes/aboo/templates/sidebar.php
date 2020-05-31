 <?php $post_types = get_query_var("post_types") ?>
 <?php $taxonomy = get_query_var("taxonomy") ?>
 <div class="col-md-4 mt-4">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="info info-horizontal">
                     <div class="icon icon-primary">
                         <i class="nc-icon nc-delivery-fast"></i>
                     </div>
                     <div class="description">
                         <p>Needs help to accomplish a particular service? Let aboo handle it for You!</p>
                         <a href="<?= home_url() . "/contact" ?>" class="btn btn-link">Contact us</a>
                     </div>
                 </div>
             </div>
             <?php if ($post_types != null) : ?>
                 <?php foreach ($post_types as $post_type) : ?>
                     <?php
                        $post_type = get_post_type_object($post_type);
                        $terms = get_terms(aboo_get_taxonomy_by_post_type($post_type->name ?? ""));
                        ?>
                     <?php if ($terms != null && $post_type != null) : ?>
                         <div class="col-12">
                             <h4 class="title"><a href="<?= get_post_type_archive_link($post_type->name)  ?>"><?= $post_type->label ?></a></h4>
                             <ul class="ml-0">
                                 <?php foreach ($terms as $term) : ?>
                                     <li><a href="<?= get_term_link($term) ?>"><?= $term->name ?></a></li>
                                 <?php endforeach ?>
                             </ul>
                         </div>
                     <?php endif ?>
                 <?php endforeach ?>
             <?php endif ?>
             <?php if ($taxonomy != null) : ?>
                 <?php
                    $terms = get_terms(["taxonomy" => $taxonomy->name]);
                    ?>
                 <?php if ($terms != null) : ?>
                     <div class="col-12">
                         <h4 class="title"><?= $taxonomy->label ?></h4>
                         <ul class="ml-0">
                             <?php foreach ($terms as $term) : ?>
                                 <li><a href="<?= get_term_link($term) ?>"><?= $term->name ?></a></li>
                             <?php endforeach ?>
                         </ul>
                     </div>
                 <?php endif ?>
             <?php endif ?>
         </div>
         <?php if (!is_search()) : ?>
             <div class="row">
                 <div class="col-12">
                     <h3 class="title">Archive</h3>
                     <ul>
                         <?php wp_get_archives(array('type' => 'yearly', 'format' => 'html')); ?>
                     </ul>
                 </div>
             </div>
         <?php endif ?>
     </div>
 </div>