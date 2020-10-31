-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 10:22 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f33ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `ID` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lang` varchar(40) NOT NULL,
  `duration` int(40) NOT NULL,
  `stars` int(5) NOT NULL,
  `director` varchar(40) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `releaseDate` date NOT NULL,
  `distributer` varchar(40) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `poster` varchar(1000) NOT NULL,
  `trailer` varchar(1000) NOT NULL,
  `synopsis` varchar(1000) NOT NULL,
  `review1` varchar(250) NOT NULL,
  `review2` varchar(250) NOT NULL,
  `review3` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `name`, `lang`, `duration`, `stars`, `director`, `cast`, `releaseDate`, `distributer`, `img`, `poster`, `trailer`, `synopsis`, `review1`, `review2`, `review3`) VALUES
(1, 'Mulan', 'English', 115, 3, 'Niki Caro', 'Crystal Liu Yifei Donnie Yen Jason Scott Lee Yoson An Gong Li Jet Li ', '2020-09-04', 'Walt Disney Pictures', 'https://lumiere-a.akamaihd.net/v1/images/p_mulan2020_20204_b005decc.jpeg?region=0,0,540,810', 'https://cms.qz.com/wp-content/uploads/2020/08/disney-mulan-e1596646420500.jpg?quality=75&strip=all&w=1600&h=900&crop=1', 'https://www.youtube.com/embed/KK8FHdFluOQ', 'When the Emperor of China issues a decree that one man per family must serve in the Imperial Army to defend the country from Northern invaders, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. Masquerading as a man, Hua Jun, she is tested every step of the way and must harness her inner-strength and embrace her true potential. It is an epic journey that will transform her into an honored warrior and earn her the respect of a grateful nation- and a proud father.', '"Apart from the lack of singing, romance, comedy and a mouthy dragon, this is just like the original. You might wonder what''s left. Well, $200 million buys a lot of scenery and sets and quite a few stars. This new version has spectacle in mind."', '"It might have been an excellent reinterpretation, were it not so heavy-handed and, well, Disney-fied. But what remains bears minimal discernible relationship to the original, while reading too much like a basic Marvel film."', '"It''s an efficient retelling of a tale about a young Chinese woman discovering her power -- affecting at times, occasionally quite lovely, but earnest, often clumsy, and notably short on joy."'),
(2, 'Tenet', 'English', 190, 4, 'Christopher Nolan', 'John David Washington Robert Pattinson Elizabeth Debicki Dimple Kapadia Aaron Taylor-Johnson Clemence', '2020-08-27', 'Warner Bros.', 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg', 'https://cdn.mos.cms.futurecdn.net/wJ4s9FFL6FdxAoKixtr4FS-1200-80.jpg', 'https://www.youtube.com/embed/LdOM0x0XDMo', 'A secret agent embarks on a dangerous, time-bending mission to prevent the start of World War III.', '"Telling a story backward sounds bizarre - it is bizarre - but it works. The backward stuff in "Tenet" sounds bizarre - worse than bizarre, goofy - and for a while it works. But once it doesn''t, it really doesn''t."', '"It''s a shiny clockwork contraption with a hollow center: a convoluted Rubik''s Cube blockbuster that, once solved, reveals little more than the complexity of its own design."', '"Tenet is a heck of an achievement and is spectacular to watch. Technologically there is nothing like it."'),
(3, 'Vanguard', 'Mandarin', 110, 4, 'Stanley Tong', 'Jackie Chan Yang Yang Miya Muqi Ai Lun', '2020-09-30', 'MM2 Entertainment, Cathay Cineplexes', 'https://img.reelgood.com/content/movie/4dbbd62d-8788-495b-860e-288ca5eacce5/poster-780.jpg', 'https://i.pinimg.com/originals/87/bc/f6/87bcf68ba8813f7adb73bd3852a22da4.jpg', 'https://www.youtube.com/embed/vV2XIy7P7Yg', 'Vanguard is an internationally-renowned and privately-owned venture high-tech security agency founded by Tang Huanting (Jackie Chan). Their client, Qin Guoli, alerted the U.S. intelligence agencies of his boss, Massym, as the leader of an aggressive military group in the Middle East. Maasym is then assassinated by the U.S. government and his son, Omar, ordered to have Qin captured. Vanguard members Lei Zhenyu (Yang Yang), Zhang Haixuan (Ai Lun) and Miya (Mu Qimiya) are sent on a mission to rescue Qin and to protect his estranged daughter, an elephant conservationist, Fareeda (Xu Ruohan).', '"Vanguard is a McDonald''s Chinese New Year burger of a movie - its overstuffed layers come garnished with holiday scenes while sugar is poured over a reassuringly familiar list of ingredients."', '"Watching "Vanguard" made me felt like Russell Crowe''s Tom Cooper from "Unhinged" - all hatred and anger boiling up inside me."', '"Unfortunately, it also features some laughably bad CGI, a cringey storyline, cheesy dialogue and pro-China propaganda, with characters devoid of dimension and villains who are caricatures."'),
(4, 'The Swordsman', 'Korean', 100, 3, 'Choi Jae-Hoon', 'Jang Hyuk Kim Hyun-Soo Joe Taslim Jeong Man-Sik ', '2020-10-15', 'Shaw Organisation', 'https://img.reelgood.com/content/movie/70cc8269-7998-44ed-bda7-06d5826b4ef8/poster-780.jpg', 'https://img.reelgood.com/content/movie/70cc8269-7998-44ed-bda7-06d5826b4ef8/poster-780.jpg', 'https://www.youtube.com/embed/FCFppNzQMRw', '"Three different swordsmen meet each other for their own reasons." Tae Yul, a swordsman in his thirties goes out to find his only daughter after losing one of his eyes. Min Seung Ho, the Joseon Dynasty''s best swordsman chooses an ordinary simple life after perceiving the transient nature of power. Gurutai, the best swordsman in Qing Dynasty aspires to become the best even in the Joseon Dynasty.', '"Through a series of great action scenes and duels that culminate in an exciting final showdown, The Swordsman earns its place among an ever-growing and hopefully never-ending list of great martial arts movies."', '"The Swordsman boasts nice looking period visuals but wastes it on a muddled setup. The earlier 1 hour or so feels like a campy K-drama historical piece that was self-contained. I felt that the only scene that worked was the climax."', '"John Wick in ancient Korea, but more (perhaps unnecessarily) convoluted."'),
(5, 'Pinocchio', 'English', 125, 3, 'Matteo Garrone', 'Federico Ielapi Roberto Benigni Gigi Proietti ', '2020-10-01', 'Shaw Organisation', 'https://media-cache.cinematerial.com/p/500x/rec2m8nv/pinocchio-italian-movie-poster.jpg?v=1575028087', 'https://static.lexpress.fr/medias_12241/w_1000,h_563,c_fill,g_north/v1593593309/le-film-devait-sortir-en-salle-le-18-mars-trois-jours-apres-le-confinement_6267442.jpeg', 'https://www.youtube.com/embed/y8UDuUVwUzg', 'Live-action adaptation of the classic story of a wooden puppet named Pinocchio who comes to life.', '"\r\nIt results in a film that is moving, tender and sumptuous, but bears a sticky queasiness that some may find unbearable."', '"Garrone renders the picaresque antics in picturesque tableaux full of elaborate set-dressing and costumery, and delivers a moving denouement."', '"\r\nAbove all, "Pinocchio" imbues its circumstances with a surprising degree of naturalism, thanks to the filmmaker''s careful handling of practical effects that suit the unusual tone."'),
(6, 'The Personal History Of David Copperfield', 'English', 119, 3, 'Armando Iannucci', 'Dev Patel Tilda Swinton Hugh Laurie Peter Capaldi ', '2020-09-17', 'Shaw Organisation', 'https://popcornsg.s3.amazonaws.com/movies/650/12668-21159-ThePerso.jpg', 'https://popcornsg.s3.amazonaws.com/movies/650/12668-21159-ThePerso.jpg', 'https://www.youtube.com/embed/l4GfEi_GyyU', 'Based on the novel by Charles Dickens.', '"A sincere affection for and understanding of the source material shines through in its wit and good nature."', '"Nimble, appealing and attuned to the nuances of Dickens'' spirit, Patel is a good Copperfield for today, a bright young man who''s able to overcome adversity and go far."', '"This latest adaptation of the book presented a screenplay that did not try hard enough to be Dickensian and, alas, was not Dickensian enough."'),
(7, 'I WeirDo', 'Mandarin', 101, 2, 'Liao Ming-Yi', 'Austin Lin Nikki Hsieh Chang Shao Huai Aviis Zhong ', '2020-09-17', 'MM2 Entertainment', 'https://pic.iask.cn/fimg/346798164106.jpg', 'https://pic.iask.cn/fimg/346798164106.jpg', 'https://www.youtube.com/embed/RAzNZF68230', 'Suffering from severe obsessive-compulsive disorder (OCD), Po Ching is often labelled as a weirdo. He seldom leaves his house, except to pay his bills and do his shopping once a week. His life changes when one day, at a supermarket, he meets Chen Ching, who also suffers from OCD. They fall in love and try to lead a relationship like normal couples.', '"The purposeful bright and quirky love story becomes awkward in the second portion when dealing with heavier topics, but decent performances keep this watchable."', '"One of the biggest promotion points of the movie is that it is the first film in Asia to be shot and edited entirely on an iPhone. This reviewer would not have been able to tell the difference if not informed beforehand"', '"Interestingly shot using iPhone, I WeirDO dives into the world of OCD and reveals the struggles faced in daily life and love matters. However, the plot and ending could have been improved."'),
(8, 'Beauty Water', 'Korean', 85, 4, 'Cho Kyung-Hun', 'Moon Nam-Sook Jang Min-Hyeok Park Seong-Gwang ', '2020-09-17', 'Golden Village Pictures', 'https://m.media-amazon.com/images/M/MV5BMmZlZmI0OGUtOWIxZi00NjYzLTg1NjItZmM3MTBiNWM1YTYzXkEyXkFqcGdeQXVyNjgwNTk4Mg@@._V1_.jpg', 'https://m.media-amazon.com/images/M/MV5BMmZlZmI0OGUtOWIxZi00NjYzLTg1NjItZmM3MTBiNWM1YTYzXkEyXkFqcGdeQXVyNjgwNTk4Mg@@._V1_.jpg', 'https://www.youtube.com/embed/YOfFoB9-bO8', 'The film revolves around Yaeji, a fat and ugly woman in a world where beauty reigns. She works as a make-up artist to the celebrity Miri, who is the total opposite of her. While Miri is beautiful, she is spoiled and treats her staff nastily.', '"While horror lovers will find Beauty Water disappointing, it still brings out the society’s perverse attitude towards good looks. In a way, Beauty Water is like the famous Korean film 200 Pounds Beauty, but less comical and more dark."', '"A gory fable on the negatives of being obsese with beauty, this animated feature shines in its medium but is a little empty in characterisation."', '"Fraught with frightening and bone-chilling scenes, Beauty Water will make viewers think twice about their own idea of beauty and how far they are willing to go to achieve it."'),
(9, 'Halloween', 'English', 109, 4, 'David Gordon Green', 'Jamie Lee Curtis Judy Greer Andi Matichak ', '2018-10-25', 'United International Pictures', 'https://images-na.ssl-images-amazon.com/images/I/41WUxfhUirL._AC_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/41WUxfhUirL._AC_.jpg', 'https://www.youtube.com/embed/ek1ePFp-nBI', 'Laurie Strode comes to her final confrontation with Michael Myers, the masked figure who has haunted her since she narrowly escaped his killing spree on Halloween night four decades ago.', '"\r\nA brutal rumination on intergenerational pain, and the ways that male cruelty can make good women bad."', '"\r\nA brutal rumination on intergenerational pain, and the ways that male cruelty can make good women bad."', '"\r\nIt has a great admiration for John Carpenter''s classic original, while doing just enough to stand on its own legs."'),
(10, 'The New Mutants', 'English', 94, 2, 'Josh Boone', 'Anya Taylor-Joy Maisie Williams Charlie Heaton Henry Zaga Blu Hunt Alice Braga ', '2020-08-27', '20th Century Fox', 'https://image.tmdb.org/t/p/original/xrI4EnZWftpo1B7tTvlMUXVOikd.jpg', 'https://image.tmdb.org/t/p/original/xrI4EnZWftpo1B7tTvlMUXVOikd.jpg', 'https://www.youtube.com/embed/W_vJhUAOFpI', '20th Century Fox in association with Marvel Entertainment presents The New Mutants, an original horror thriller set in an isolated hospital where a group of young mutants is being held for psychiatric monitoring. When strange occurrences begin to take place, both their new mutant abilities and their friendships will be tested as they battle to try and make it out alive.', '"It finally arrives more than two years after its original planned release date and at times it''s hard not to stifle the unkind thought: ''Why so soon?''"', '"The New Mutants is a peek at how we could blend horror and superheroes together and it''s a fun, angsty adventure that exists in both realms."', '"It adds up to an old-fashioned B-picture bereft of the rousing jolt of bad taste that gave the genre its energy."'),
(11, 'Wonder Woman 1984', 'English', 0, 0, 'Patty Jenkins', 'Gal Gadot Chris Pine Kristen Wiig Pedro Pascal ', '2020-12-24', 'NA', 'https://images-na.ssl-images-amazon.com/images/I/714O2retc6L._AC_SL1304_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/714O2retc6L._AC_SL1304_.jpg', '\r\n', 'During the Cold War in the 1980s, Diana Prince a.k.a. Wonder Woman comes into conflict with the Soviet Union. She also has to square off against Cheetah, a villainess with superhuman strength.', '', '', ''),
(12, 'Snake Eyes: G.I.Joe', '', 0, 0, '', '', '0000-00-00', '', 'https://i.pinimg.com/originals/6d/e9/2c/6de92c42469612a8714e1b829ce2c756.jpg', '', '', '', '', '', ''),
(13, 'Honest Thief', 'English', 92, 0, 'Mark Williams', 'Liam Neeson Kate Walsh Jai Courtney Jeffrey Donovan ', '2020-10-22', 'Shaw Organisation', 'https://www.joblo.com/assets/images/joblo/news/2020/07/honesttheifposterman1.jpg', 'https://www.joblo.com/assets/images/joblo/news/2020/07/honesttheifposterman1.jpg', '', 'Career bank robber Tom Carter (Liam Neeson) is a former marine and demolitions expert who has robbed $9 million from 12 banks in 7 states. No one knows his true identity and they call him the In and Out bandit for his meticulous bank jobs. When he meets the love of his life Annie (Kate Walsh), he is inspired to right his past wrongs and leave behind his life of crime.\r\n\r\nHe turns himself in to the FBI and forfeits the money in return for a plea deal and clean slate. When he calls the Boston FBI field office to confess and set a meeting, Agents Baker (Robert Patrick) and Meyers (Jeffrey Donovan) laugh it off as a prank. Instead, they send their subordinates, Agent Nivens (Jai Courtney) and Hall (Anthony Ramos). The two younger agents are shocked to discover that Tom is the real deal and see the stolen money as their golden ticket to a better life. So begins an intense, action-packed cat-and-mouse game where good and bad become tangled.', '', '', ''),
(14, 'Your Eyes Tell', 'Japanese', 123, 0, 'Takahiro Miki', 'Yuriko Yoshitaka Ryusei Yokohama Kyosuke Yabe Toru Nomaguchi ', '2020-10-29', 'NA', 'https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1125,h_1531/https://www.knetizen.com/wp-content/uploads/2020/07/BTS-2.jpeg', 'https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1125,h_1531/https://www.knetizen.com/wp-content/uploads/2020/07/BTS-2.jpeg', '', '', '', '', ''),
(15, 'The Witches', '', 0, 0, '', '', '0000-00-00', '', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/witches-poster-1601645337.jpeg', '', '', '', '', '', ''),
(16, 'Summer Wars', '', 0, 0, '', '', '0000-00-00', '', 'https://m.media-amazon.com/images/M/MV5BNDUzMzVmZGEtNjE4Ny00NmZkLThiMWEtNjJjY2Y3MzlkYzg1XkEyXkFqcGdeQXVyNjYyMTYxMzk@._V1_UY1200_CR108,0,630,1200_AL_.jpg', 'https://m.media-amazon.com/images/M/MV5BNDUzMzVmZGEtNjE4Ny00NmZkLThiMWEtNjJjY2Y3MzlkYzg1XkEyXkFqcGdeQXVyNjYyMTYxMzk@._V1_UY1200_CR108,0,630,1200_AL_.jpg', '', '', '', '', ''),
(17, 'Ender''s Game', '', 0, 0, '', '', '0000-00-00', '', 'https://image.tmdb.org/t/p/w500/tBgkQqrO2RMgGQR6zod3bSjcPWx.jpg', 'https://image.tmdb.org/t/p/w500/tBgkQqrO2RMgGQR6zod3bSjcPWx.jpg', '', '', '', '', ''),
(18, 'Little Women', '', 0, 0, '', '', '0000-00-00', '', 'https://m.media-amazon.com/images/M/MV5BY2QzYTQyYzItMzAwYi00YjZlLThjNTUtNzMyMDdkYzJiNWM4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UY1200_CR90,0,630,1200_AL_.jpg', 'https://m.media-amazon.com/images/M/MV5BY2QzYTQyYzItMzAwYi00YjZlLThjNTUtNzMyMDdkYzJiNWM4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UY1200_CR90,0,630,1200_AL_.jpg', '', '', '', '', ''),
(19, 'Portrait of a Lady on Fire', '', 0, 0, '', '', '0000-00-00', '', 'https://m.media-amazon.com/images/M/MV5BNjgwNjkwOWYtYmM3My00NzI1LTk5OGItYWY0OTMyZTY4OTg2XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg', 'https://m.media-amazon.com/images/M/MV5BNjgwNjkwOWYtYmM3My00NzI1LTk5OGItYWY0OTMyZTY4OTg2XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg', '', '', '', '', ''),
(20, 'Ad Astra', '', 0, 0, '', '', '0000-00-00', '', 'https://cdn.collider.com/wp-content/uploads/2019/06/ad-astra-poster.jpg', 'https://cdn.collider.com/wp-content/uploads/2019/06/ad-astra-poster.jpg', '', '', '', '', ''),
(21, 'Dark Phoenix', '', 0, 0, '', '', '0000-00-00', '', 'https://i.imgur.com/v9wbYRK.jpg', 'https://i.imgur.com/v9wbYRK.jpg', '', '', '', '', ''),
(22, 'Midsommar', '', 0, 0, '', '', '0000-00-00', '', 'https://www.indiewire.com/wp-content/uploads/2019/12/midsommar.jpg?w=1013', 'https://www.indiewire.com/wp-content/uploads/2019/12/midsommar.jpg?w=1013', '', '', '', '', ''),
(23, 'Parasite', '', 0, 0, '', '', '0000-00-00', '', 'https://www.indiewire.com/wp-content/uploads/2019/12/parasite.jpg?w=1280', 'https://www.indiewire.com/wp-content/uploads/2019/12/parasite.jpg?w=1280', '', '', '', '', ''),
(24, 'Joker', '', 0, 0, '', '', '0000-00-00', '', 'https://www.indiewire.com/wp-content/uploads/2019/12/JokerPoster1200_5ca3c435318d42.29270548.jpg?w=809', 'https://www.indiewire.com/wp-content/uploads/2019/12/JokerPoster1200_5ca3c435318d42.29270548.jpg?w=809', '', '', '', '', ''),
(25, 'US', '', 0, 0, '', '', '0000-00-00', '', 'https://www.indiewire.com/wp-content/uploads/2019/12/us-1.jpg?w=1213', 'https://www.indiewire.com/wp-content/uploads/2019/12/us-1.jpg?w=1213', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
