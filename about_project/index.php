<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @var CMain $APPLICATION */
$APPLICATION->SetTitle("О проекте");
require($_SERVER["DOCUMENT_ROOT"] . "/breadcrumb/index.php");
?>
    <link rel="stylesheet" href="/about_project/css/about_project.css">
    <link rel="stylesheet" href="/about_project/css/about_project_mobil.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <div class="max-width-1216">
        <?php
        breadcrumb('О проекте');
        ?>
        <?php
        $APPLICATION->IncludeFile(
            $APPLICATION->GetCurDir().'/includes/block_about_us.php'
        );
        ?>
        <div class="block-catalog">
            <?php
            $APPLICATION->IncludeFile(
                $APPLICATION->GetCurDir().'/includes/for_guests.php'
            );
            ?>
            <div class="bottom_box">
                <?php
                $APPLICATION->IncludeFile(
                    $APPLICATION->GetCurDir().'/includes/how_promote_salon.php'
                );
                ?>

                <?php
                $APPLICATION->IncludeFile(
                    $APPLICATION->GetCurDir().'/includes/how_promote_profile.php'
                );
                ?>
            </div>
        </div>

        <?php
        $APPLICATION->IncludeFile(
            $APPLICATION->GetCurDir().'/includes/block_statistics.php'
        );
        ?>
        <?php
        $APPLICATION->IncludeFile(
            $APPLICATION->GetCurDir().'/includes/block_advantages.php'
        );
        ?>
        <?php
        $APPLICATION->IncludeFile(
            $APPLICATION->GetCurDir().'/includes/block_reviews.php'
        );
        ?>
        <?php
        $APPLICATION->IncludeFile(
            $APPLICATION->GetCurDir().'/includes/block_SEO.php'
        );
        ?>
    </div>
    <script src="./js/about_project.js"></script>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");