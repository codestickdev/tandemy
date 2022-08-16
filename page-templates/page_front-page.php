<?php
    /**
     * Template name: Front page
     */
get_header(); ?>

<main class="tandemy tandemy--main">
    <section class="mainHeader" style="background-image: url('<?php echo get_field('mainHeader_bg'); ?>');">
        <div class="mainHeader__wrap container">
            <div class="mainHeader__content">
                <h1>Loty widokowe <span>Z głową w chmurach</span></h1>
                <div class="quote">
                    <p>"Wystarczy, że raz doznasz lotu, a będziesz zawsze chodził z oczami zwróconymi w stronę nieba, gdzie byłeś i gdzie pragniesz powrócić."</p>
                    <p class="quote__author">Leonardo da Vinci</p>
                </div>
                <a href="#contact" class="btn btn--center"><span>Rezerwuj lot</span></a>
            </div>
            <a href="#about" class="mainHeader__arrow">Dowiedz się więcej<span class="arrow"></span></a>
        </div>
    </section>
    <section id="about" class="mainAbout">
        <div class="mainAbout__wrap container">
            <h2><?php echo get_field('mainAbout_title'); ?></h2>
            <p><?php echo get_field('mainAbout_content'); ?></p>
            <?php
                $video = get_field('mainAbout_video');
            if($video): ?>
            <div class="mainAbout__video">
                <p>Zobacz nasze ostatnie wideo</p>
                <div class="video">
                    <?php echo get_field('mainAbout_video'); ?>
                </div>
                <a href="#" class="btn"><span>Zobacz wszystkie filmy</span></a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="mainInfo">
        <div class="mainInfo__wrap container">
            <?php while(have_rows('mainInfo')): the_row(); ?>
            <div class="mainInfo__row">
                <div class="image">
                    <div class="image__image">
                        <img src="<?php echo get_sub_field('mainInfo_image')['url']; ?>" alt="<?php echo get_sub_field('mainInfo_image')['alt']; ?>"/>
                    </div>
                </div>
                <div class="content">
                    <div class="content__wrap">
                        <h2><?php echo get_sub_field('mainInfo_title'); ?></h2>
                        <?php echo get_sub_field('mainInfo_content'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="mainOffer">
        <?php while(have_rows('mainOffer')): the_row(); 
            $bg = get_sub_field('mainOffer_bg');
            $short = get_sub_field('mainOffer_short');
            $name = get_sub_field('mainOffer_name');
            $desc = get_sub_field('mainOffer_desc');
            $price = get_sub_field('mainOffer_price');
        ?>
        <div class="mainOffer__box" style="background-image: url(<?php echo $bg; ?>)">
            <div class="content">
                <span class="short"><?php echo $short; ?></span>
                <h2><?php echo $name; ?></h2>
                <p><?php echo $desc; ?></p>
            </div>
            <div class="bottom">
                <p class="price"><span><?php echo $price; ?></span> zł</p>
                <a href="#contact" class="btn" value="<?php echo $short; ?>"><span>Zamawiam</span></a>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    <?php $images = get_field('mainGallery') ?>
    <section class="mainGallery">
        <div class="mainGallery__heading">
            <h2>Galeria zdjęć i filmów</h2>
        </div>
        <div class="mainGallery__wrap container">
            <a href="<?php echo home_url('/zdjecia'); ?>" class="box box--images" style="background-image: url('<?php echo get_field('mainGallery_box_images_bg'); ?>')">
                <p>Galeria zdjęć</p>
            </a>
            <a href="<?php echo home_url('/wideo'); ?>" class="box box--video" style="background-image: url('<?php echo get_field('mainGallery_box_videos_bg'); ?>')">
                <p>Filmy wideo</p>
            </a>
        </div>
    </section>
    <section class="mainPlaces">
        <div class="mainPlaces__wrap container">
            <div class="mainPlaces__heading">
                <h2>Miejsce startów</h2>
                <p>Starty odbywają się w dwóch poniższych lokalizacjach. <br/>Wybierz jedną z nich aby wyświetlić na mapie.</p>
                <div class="switcher">
                    <p class="switcher__btn switcher__btn--active" value="grabie"><span>Grabie - Kraków</span></p>
                    <p class="switcher__btn" value="strzelce"><span>Strzelce Małe</span></p>
                </div>
            </div>
            <div class="mainPlaces__map">
                <div id="placesMap"></div>
            </div>
        </div>
    </section>
    <section id="contact" class="mainContact">
        <div class="mainContact__wrap">
            <div class="mainContact__heading">
                <h2>Skontaktuj się z nami!</h2>
                <p>Chcesz przeżyć przygodę w powietrzu? Wypełnij poniższy formularz aby się z nami skontaktować.</p>
            </div>
            <div class="mainContact__form">
                <form id="contactForm" class="contactForm" method="POST">
                    <div class="contactForm__notice"></div>
                    <div class="contactForm__row contactForm__row--flex">
                        <div class="contactForm__input">
                            <input type="text" name="contactName" placeholder="Imię i Nazwisko"/>
                        </div>
                        <div class="contactForm__input">
                            <input type="phone" name="contactPhone" placeholder="Telefon"/>
                        </div>
                        <div class="contactForm__input">
                            <input type="email" name="contactEmail" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="contactForm__row">
                        <div class="dropdownSelect" default="Jaką usługą jesteś zainteresowany?">
                            <div class="selected" value="false">
                                <p>Jaką usługą jesteś zainteresowany?</p>
                            </div>
                            <div class="dropdown">
                                <?php while(have_rows('mainOffer')): the_row(); ?>
                                <div class="dropdown__pos" value="<?php echo get_sub_field('mainOffer_short'); ?>" name="<?php echo get_sub_field('mainOffer_name'); ?>">
                                    <p><?php echo get_sub_field('mainOffer_name'); ?></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="contactForm__row">
                        <div class="contactForm__input">
                            <textarea name="contactMessage" placeholder="Twoja wiadomość"></textarea>
                        </div>
                    </div>
                    <div class="contactForm__row">
                        <div class="contactForm__acceptance">
                            <input type="checkbox" name="contactAcceptance"/>
                            <div class="checkbox"></div>
                            <label for="contactAcceptance">Wyrażam zgodę na przetwarzanie danych osobowych na potrzeby odpowiedzi na moje zgłoszenie. Więcej informacji w <a href="#" target="_blank">polityce prywatności</a></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn--button"><span>Wyślij zapytanie</span></button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>