<?php

namespace App\DataFixtures;

use App\Entity\Questions;
use App\Entity\Themes;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $listes_themes = ["Manga et Anime", "Comics", "Animaux", "Sport", "Dessins animés", "Cinéma", "Harry Potter"];

        foreach($listes_themes as $theme) {
            $themes = new Themes();
            $themes->setNomTheme($theme);

            $manager->persist($themes);
        }


        $question = new Questions();

        $question->setQuestion("Quel est le manga le plus vendu de tous les temps ?")
            ->setReponse1("Dragon Ball")
            ->setReponse2("One Piece")
            ->setReponse3("Naruto")
            ->setReponse4("Blue Lock")
            ->setReponseJuste(2)
            ->setTheme("Manga et Anime");
        $manager->persist($question);


        $question2 = new Questions();

        $question2->setQuestion("Dans One Piece, comment s'appelle le roi des pirates ?")
            ->setReponse1("Gold Roger")
            ->setReponse2("Akainu")
            ->setReponse3("Gol D. Roger")
            ->setReponse4("Baggy")
            ->setReponseJuste(3)
            ->setTheme("Manga et Anime");
        $manager->persist($question2);


        $question3 = new Questions();

        $question3->setQuestion("Dans Naruto, qui ne fait pas parti de l'équipe 7 ?")
            ->setReponse1("Sakura")
            ->setReponse2("Naruto")
            ->setReponse3("Sasuke")
            ->setReponse4("Neji")
            ->setReponseJuste(4)
            ->setTheme("Manga et Anime");
        $manager->persist($question3);


        $question4 = new Questions();

        $question4->setQuestion("Dans bleach, comment s'appelle la forme finale du Zanpakuto")
            ->setReponse1("Shikai")
            ->setReponse2("Bankai")
            ->setReponse3("Hentai")
            ->setReponse4("Shikadai")
            ->setReponseJuste(2)
            ->setTheme("Manga et Anime");
        $manager->persist($question4);


        $question5 = new Questions();

        $question5->setQuestion("Comment s'appelle la partie 4 de JoJo's Bizarre Adventure ?")
            ->setReponse1("Golden Wind")
            ->setReponse2("Stardust Crusaders")
            ->setReponse3("Diamond is Unbreakable")
            ->setReponse4("Steel Ball Run")
            ->setReponseJuste(3)
            ->setTheme("Manga et Anime");
        $manager->persist($question5);


        $question6 = new Questions();

        $question6->setQuestion("Dans l'attaque des titans, combien y a t-il de titans primodiaux ?")
            ->setReponse1("7")
            ->setReponse2("8")
            ->setReponse3("9")
            ->setReponse4("10")
            ->setReponseJuste(3)
            ->setTheme("Manga et Anime");
        $manager->persist($question6);


        $question7 = new Questions();

        $question7->setQuestion("Dans Dragon Ball Z, combien de forme freezer possède t-il ?")
            ->setReponse1("3")
            ->setReponse2("4")
            ->setReponse3("5")
            ->setReponse4("6")
            ->setReponseJuste(2)
            ->setTheme("Manga et Anime");
        $manager->persist($question7);


        $question8 = new Questions();

        $question8->setQuestion("Dans Jujutsu Kaisen, quel est la deuxième épreuve du tournoi Inter-lycée ?")
            ->setReponse1("Un concours d'apnée")
            ->setReponse2("Un concours de chifoumi")
            ->setReponse3("Des combat en 1v1")
            ->setReponse4("Une partie de baseball")
            ->setReponseJuste(4)
            ->setTheme("Manga et Anime");
        $manager->persist($question8);


        $question9 = new Questions();

        $question9->setQuestion("Dans My Hero Academia, qui donne son alter à Izuku ?")
            ->setReponse1("All Might")
            ->setReponse2("Endevor")
            ->setReponse3("Hawks")
            ->setReponse4("All For One")
            ->setReponseJuste(1)
            ->setTheme("Manga et Anime");
        $manager->persist($question9);


        $question10 = new Questions();

        $question10->setQuestion("Dans Hunter x Hunter, comment s'appelle le chef de la Brigade Fantôme ?")
            ->setReponse1("Uvôguine")
            ->setReponse2("Kuroro Lucifuru")
            ->setReponse3("Nobunaga Hazama")
            ->setReponse4("Hisoka")
            ->setReponseJuste(2)
            ->setTheme("Manga et Anime");
        $manager->persist($question10);



        $question_HP = new Questions();

        $question_HP->setQuestion("Dans la partie d'échec géant, quel est le premier coup jouer par Ron ?")
            ->setReponse1("D5")
            ->setReponse2("B3")
            ->setReponse3("E4")
            ->setReponse4("E6")
            ->setReponseJuste(1)
            ->setTheme("Harry Potter");
        $manager->persist($question_HP);


        $question2_HP = new Questions();

        $question2_HP->setQuestion("Comment s'appelle la potion permetant de prendre l'apparence de quelqu'un ?")
            ->setReponse1("Felix Felicis")
            ->setReponse2("Polynectar")
            ->setReponse3("Amortentia")
            ->setReponse4("Doxycide")
            ->setReponseJuste(2)
            ->setTheme("Harry Potter");
        $manager->persist($question2_HP);


        $question3_HP = new Questions();

        $question3_HP->setQuestion("Qui est le premier prisonnier à s'être évadé d'azkaban ?")
            ->setReponse1("Bellatrix Lestrange")
            ->setReponse2("Tom Jedusor")
            ->setReponse3("Fenrir Greyback")
            ->setReponse4("Sirius Black")
            ->setReponseJuste(4)
            ->setTheme("Harry Potter");
        $manager->persist($question3_HP);


        $question4_HP = new Questions();

        $question4_HP->setQuestion("Qui ne participe pas au tournoi des 3 sorciers ?")
            ->setReponse1("Cedric Diggory")
            ->setReponse2("Fleur Delacour")
            ->setReponse3("Viktor Krum")
            ->setReponse4("Fred Weasley")
            ->setReponseJuste(4)
            ->setTheme("Harry Potter");
        $manager->persist($question4_HP);


        $question5_HP = new Questions();

        $question5_HP->setQuestion("Quelle créature peut être vu uniquement par ceux qui ont vu la mort ?")
            ->setReponse1("Sombral")
            ->setReponse2("Détraqueur")
            ->setReponse3("Acromentule")
            ->setReponse4("Animagus")
            ->setReponseJuste(1)
            ->setTheme("Harry Potter");
        $manager->persist($question5_HP);


        $question6_HP = new Questions();

        $question6_HP->setQuestion("Qui est le prince de sang-mêlé ?")
            ->setReponse1("Severus Rogue")
            ->setReponse2("Arthur Weasley")
            ->setReponse3("Tom Jedusor")
            ->setReponse4("Hagrid")
            ->setReponseJuste(1)
            ->setTheme("Harry Potter");
        $manager->persist($question6_HP);


        $question7_HP = new Questions();

        $question7_HP->setQuestion("Quel est le dernier horcrux à être détruit ?")
            ->setReponse1("Le médaillon de Serpentard")
            ->setReponse2("La coupe de Poufsouffle")
            ->setReponse3("Nagini")
            ->setReponse4("La bague d'Elvis Gaunt")
            ->setReponseJuste(3)
            ->setTheme("Harry Potter");
        $manager->persist($question7_HP);


        $question8_HP = new Questions();

        $question8_HP->setQuestion("Quel sort permet de faire léviter des objets ?")
            ->setReponse1("Accio")
            ->setReponse2("Especto Patronum")
            ->setReponse3("Alohomora")
            ->setReponse4("Wingardium Leviosa")
            ->setReponseJuste(4)
            ->setTheme("Harry Potter");
        $manager->persist($question8_HP);


        $question9_HP = new Questions();

        $question9_HP->setQuestion("Quel nom Hagrid donne t-il à son dragon ?")
            ->setReponse1("Norbert")
            ->setReponse2("Pierre")
            ->setReponse3("Michel")
            ->setReponse4("Jacques")
            ->setReponseJuste(1)
            ->setTheme("Harry Potter");
        $manager->persist($question9_HP);


        $question10_HP = new Questions();

        $question10_HP->setQuestion("Quel est le numéro du coffre de harry à Gringotts ?")
            ->setReponse1("713")
            ->setReponse2("689")
            ->setReponse3("687")
            ->setReponse4("703")
            ->setReponseJuste(3)
            ->setTheme("Harry Potter");
        $manager->persist($question10_HP);



        $question_animaux = new Questions();

        $question_animaux->setQuestion("Quel est le plus grand mammifère marin de la planète ?")
            ->setReponse1("Le requin")
            ->setReponse2("La baleine")
            ->setReponse3("Le lamantin")
            ->setReponse4("	L’éléphant")
            ->setReponseJuste(2)
            ->setTheme("Animaux");
        $manager->persist($question_animaux);


        $question2_animaux = new Questions();

        $question2_animaux->setQuestion("Où vit le diable de Tasmanie ?")
            ->setReponse1("En Afrique")
            ->setReponse2("En Asie")
            ->setReponse3("En Australie")
            ->setReponse4("Nulle part, c'est un personnage de dessin animé")
            ->setReponseJuste(1)
            ->setTheme("Animaux");
        $manager->persist($question2_animaux);


        $question3_animaux = new Questions();

        $question3_animaux->setQuestion("Combien de pattes possèdent les insectes ?")
            ->setReponse1("4")
            ->setReponse2("6")
            ->setReponse3("8")
            ->setReponse4("10")
            ->setReponseJuste(2)
            ->setTheme("Animaux");
        $manager->persist($question3_animaux);


        $question4_animaux = new Questions();

        $question4_animaux->setQuestion("En quoi sont fait les défense d'un éléphant ?")
            ->setReponse1("Fer")
            ->setReponse2("Bois")
            ->setReponse3("Argent")
            ->setReponse4("Ivoire")
            ->setReponseJuste(4)
            ->setTheme("Animaux");
        $manager->persist($question4_animaux);


        $question5_animaux = new Questions();

        $question5_animaux->setQuestion("Que mangent les termites ?")
            ->setReponse1("Des os")
            ->setReponse2("Des excréments")
            ->setReponse3("Des graines")
            ->setReponse4("Du bois")
            ->setReponseJuste(4)
            ->setTheme("Animaux");
        $manager->persist($question5_animaux);


        $question6_animaux = new Questions();

        $question6_animaux->setQuestion("Quel oiseau africain ne vole pas, mais court très vite ?")
            ->setReponse1("Le vautour")
            ->setReponse2("Le calao")
            ->setReponse3("L'autruche")
            ->setReponse4("Le bip-bip")
            ->setReponseJuste(3)
            ->setTheme("Animaux");
        $manager->persist($question6_animaux);



        $question7_animaux = new Questions();

        $question7_animaux->setQuestion("Combien une étoile de mer a-t-elle habituellement de bras ?")
            ->setReponse1("3")
            ->setReponse2("4")
            ->setReponse3("5")
            ->setReponse4("6")
            ->setReponseJuste(3)
            ->setTheme("Animaux");
        $manager->persist($question7_animaux);


        $question8_animaux = new Questions();

        $question8_animaux->setQuestion("Que mange le koala ?")
            ->setReponse1("Du bambou")
            ->setReponse2("De l'eucalyptus")
            ->setReponse3("De la salade")
            ->setReponse4("Des Tacos 3 viandes")
            ->setReponseJuste(2)
            ->setTheme("Animaux");
        $manager->persist($question8_animaux);


        $question9_animaux = new Questions();

        $question9_animaux->setQuestion("Quel est le félin le plus rapide ?")
            ->setReponse1("Le lion")
            ->setReponse2("Le léopard")
            ->setReponse3("Le jaguar")
            ->setReponse4("Le guépard")
            ->setReponseJuste(4)
            ->setTheme("Animaux");
        $manager->persist($question9_animaux);


        $question10_animaux = new Questions();

        $question10_animaux->setQuestion("Combien une araignée a-t-elle de pattes?")
            ->setReponse1("6")
            ->setReponse2("7")
            ->setReponse3("8")
            ->setReponse4("10")
            ->setReponseJuste(3)
            ->setTheme("Animaux");
        $manager->persist($question10_animaux);

        $manager->flush();
    }
}
