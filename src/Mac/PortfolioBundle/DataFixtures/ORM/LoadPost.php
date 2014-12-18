<?php


namespace Mac\PortfolioBundle\DataFixtures\ORM {

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use Mac\PortfolioBundle\Entity\Post;
    use Symfony\Component\Validator\Constraints\DateTime;


    class LoadPostData implements FixtureInterface
    {
        /**
         * @param ObjectManager $manager
         */
        public function load(ObjectManager $manager)
        {
            //je definie mes tableaux d'information
            $titles = array(
                'title 1',
                'title 2',
                'title 3',
                'title 4'
            );

            $type = array(
                'post',
                'page',
                'creation',
            );




            foreach($titles as $title) {
                $post = new Post();
                $slug = $this->slugify($title);
                $post->setTitle($title)
                    ->setAuthor('macko')
                    ->setContent("Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie ians fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. ")
                    ->setDate(new \DateTime('now'))
                    ->setExcerpt("Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.")
                    ->setParent(0)
                    ->setStatus('publish')
                    ->setSlug($slug)
                    ->setType($type[array_rand($type, 1)]);
                $manager->persist($post);
            }

            $manager->flush();
        }

        /**
         * @param $text
         * @return mixed|string
         */
        public function slugify($text)
        {
            // replace non letter or digits by -
            $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

            // trim
            $text = trim($text,'-');

            // transliterate
            if (function_exists('iconv'))
            {
                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            }

            // lowercase
            $text = strtolower($text);

            // remove unwanted characters
            $text = preg_replace('#[^-\w]+#', '', $text);

            if (empty($text))
            {
                return 'n-a';
            }

            return $text;
        }

        /**
         * @return int
         */
        public function getOrder()
        {
            return 0;
        }


    }
}