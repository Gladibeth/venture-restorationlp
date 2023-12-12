<?php
    //variables for project
    $project_group       = get_field('project');
    $project_tag         = $project_group['tag_project'];
    $project_title       = $project_group['title_project'];
    $project_description = $project_group['description_project'];
    $project_loop        = $project_group['featured_projects'];
?>

<?php if ($testimonial_loop) : ?>

    <section class="main-projects main-content__large  pv80 bg-light">
        <div class="main-content__medium">
            <div class="main-content__small flex-center">
            <p class="main-tag bg-secundary__blue mb-10">
                <?= $project_tag ?>
            </p>
            <div class="main-title mb-40">
                <h2>
                <?= $project_title ?>
                </h2>
            </div>
            <p class="main-paragraph mb-40 text-center">
                <?= $project_description ?>
            </p>
            </div>
            <div class="main-projects__content">
            <div class="main-projects__img">
            <?php foreach ($project_loop as $project) : ?>
                <div class="main-projects__img-items">
                <?php
                    // Obtener la URL de la imagen destacada
                    $image_url = get_the_post_thumbnail_url($project->ID, 'full');
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                </div>
            <?php endforeach; ?>
            </div>
            </div>
        </div>
    </section>

<?php endif; ?>