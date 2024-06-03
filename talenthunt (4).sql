-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 06:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talenthunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_id`, `admin_password`) VALUES
(1, 'hitesh jogi', 'jogihitesh54@gmail.com', '123'),
(2, 'viveksingh rajput', 'rajputviveksingh849@gmail.com', '123456'),
(3, 'ankit kushwaha', 'ankitkushwah60341@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE `tbl_area` (
  `area_id` int(5) NOT NULL,
  `area_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`area_id`, `area_name`) VALUES
(1, 'Satellite'),
(2, 'Navrangpura'),
(3, 'Vadaj'),
(4, 'Ranip'),
(5, 'Kankaria '),
(6, 'memnagar'),
(21, 'naroda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artist`
--

CREATE TABLE `tbl_artist` (
  `artist_id` int(5) NOT NULL,
  `artist_name` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `artist_gender` varchar(6) NOT NULL,
  `artist_dob` date NOT NULL,
  `artist_password` varchar(20) NOT NULL,
  `artist_mobile` int(100) NOT NULL,
  `type_id` int(3) NOT NULL,
  `profile_photo` varchar(100) NOT NULL,
  `about_me` text NOT NULL,
  `area_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artist`
--

INSERT INTO `tbl_artist` (`artist_id`, `artist_name`, `email_id`, `artist_gender`, `artist_dob`, `artist_password`, `artist_mobile`, `type_id`, `profile_photo`, `about_me`, `area_id`) VALUES
(1, 'Radhika Soni', 'radhika54@gmail.com', 'female', '1997-07-18', '123', 2147483647, 3, 'ss1.jpg', 'hello, this is radhika, My performances are known for good quality singing and good crowd interaction. Clients are never disappointed with any aspects so far .', 1),
(2, 'Rajesh Patel', 'rajesh23@gmail.com', 'male', '1999-06-17', '123', 879940984, 3, 'ss7.jpg', 'Hello , This is Rajesh, I am a singer and performer we are performing live music show in ahmedabad. I have complete bachelor’s in Indian classical music', 1),
(3, 'Manshi Patel', 'manu23@gmail.com', 'female', '2000-11-23', '123', 123456789, 1, 'dd1.JPG', 'I am a dancer and a choreographer based in Ahmedabad and Founder and Owner of Hijack Dance Company and Hijack Crew, a all girls dance crew from Ahmedabad. I have worked as a choreographer main lead for a lot of commercial projects. Along with that I hold 10 years of experience as a', 1),
(4, 'Dev Shah', 'Dev234@gmail.com', 'male', '1999-09-15', '123', 987654321, 4, 'st1.jpg', 'Dev is a professional comedian based out of Ahmedabad.Doing one of the toughest tasks there is i.e making people laugh, Dev is Stand Up Comedian who has been leaving people in splits through his comedy for a significant amount of time. His way of delivering dialogues and comedy punches is one of his biggest strengths.', 3),
(5, 'Akash Kushwah', 'Akash@gmail.com', 'male', '2001-05-16', '321', 741258963, 4, 'st18.jpg', 'Having performed over 250 shows across India, his stage performances are a mix of observational jokes, Rajasthani stories & funny regional accents which keeps his style of comedy delightfully amusing.', 4),
(6, 'Rani Jogi', 'Rani6@gmail.com', 'female', '1999-02-03', '963', 369852147, 5, 'a4.jpg', 'Bringing you the latest news as it happens. With years of experience in journalism, I strive to provide unbiased and insightful reporting to keep you informed.\"', 2),
(7, 'Manoj Jadav', 'manoj23@gmail.com', 'male', '1999-02-03', '963', 956321487, 3, 'ss12.jpg', 'Hey you lovers I’m a professional singer and have performed at corporate, weddings, engagements,mehndi shows, various cafes,clubs and much more.!', 3),
(8, 'raja mohan', 'raja33335@gmail.com', 'male', '1999-06-09', '8852', 986574321, 3, 'ss16.jpg', 'I\'m a Live artist , independent singer songwriter and a sound engineer from  ahmedabad, gujarat .My musical influences range from Guns & Roses to Billie Eilish that makes my set a perfect mix of classic rock and modern day pop', 3),
(9, 'Tanvi shah', 'tanvishah15@gmail.co', 'female', '1999-05-06', 'tanvishah', 489657123, 3, 'ss20.jpg', 'I am a ahmedabad based singer, songwriter and a live performer. I have played over 120 gigs in the last 7 months. I have performed in ahmedabad, gujarat, and in many more places...', 6),
(10, 'Shaswat singh', 'shaswatsingh45@gmail.com', 'male', '1999-02-04', 'shaswatsingh', 879451784, 3, 'ss69.jpg', 'I am a Singer and guitarist Available for live shows. I have 5 years of experience and I live in ahmedabad ...', 2),
(11, 'abhay rajput', 'abhayrajput98@gmail.com', 'male', '2001-11-13', 'abhayrajput', 652189745, 3, 'ss72.jpg', 'I consider myself lucky to start learning indian classical music at a young age.Thanks to my mentors who laid a solid foundation & equipped me to perform various genres such as Ghazals, Qawalli, folk, pop and not to mention Bollywood. Proudly leading Afreen Band with group of energetic, young & trained musicians. Addtionally, persued Masters in Music vocal & classical.', 5),
(12, 'Ankush kumar', 'ankushkumar77@gmail.com', 'male', '1998-12-01', 'ankushkumar', 471247684, 2, 'm7.jpg', ' He has been shocking people with his magic tricks for 8 years performing all around the globe. He is a magic consultant and has worked with big celebrities of bollywood such like Akshay Kumar, Sara Ali Khan and much more. He is also a globally recognised Magic Designer / Magic Creator and have published many of his works on International Platforms.', 2),
(13, 'Rishi mishra', 'rishimishra@gmail.com', 'male', '2000-06-27', 'rishimishra', 749875123, 2, 'm10.jpg', 'Jadugar Rishi is a professional magician based out of Orissa.With his magic, people feel wonder struck. With his magic, people are taken aback. He is super skillful when it comes to tricking people.', 2),
(14, 'roshni agrawal', 'roshni64@gmail.com', 'female', '2001-12-06', '123', 147648219, 2, 'm1.jpg', 'Be it Closeup Or Stage Magician Radhika is the Answer to all Your Entertainment Needs.', 4),
(15, 'Rahul kumawat', 'rahulkumawat57@gmail.com', 'male', '2000-07-30', 'rahulkumawat', 647215794, 2, 'm17.jpg', 'Magician Shakshi is a best female magician from Ahmedabad , popular as magic queen Shakshi. she is a star Magician of the India. she is one of the famous illusionist and conjurer magician of India. ', 5),
(16, 'Aradhna gupta', 'aradhnagupta52@gmail', 'female', '2001-07-18', 'aradhnagupta', 856749124, 3, 'ss51.jpg', ' I started learning Indian Classical Music from an young age. For first few years learnt from my music teacher Mr. Tapan Dutta Gon. Then I started proper training from my Guruma Lt.', 4),
(17, 'Ridhi joshi', 'ridhijoshi85@gmail.com', 'female', '2002-01-23', 'ridhijoshi', 157934678, 3, 'ss58.jpg', 'The soulful voice from Ahmedabad, brings the magic of Bollywood to life through her enchanting renditions. With a penchant for emotive storytelling, she transforms each note into a captivating narrative, capturing the essence of the Hindi film industry. Bornalee\'s musical journey is a symphony of passion and talent, weaving her distinct mark into the vibrant tapestry of Ahmedabad\'s rich musical heritage', 5),
(18, 'Anurag mishra', 'anuragmishra64@gmail.com', 'male', '1999-02-25', 'anuragmishra', 982347561, 3, 'ss81.jpg', 'Anurag is a talented male singer based in Ahmedabad. With a passion for Bollywood music, he has gained considerable experience in the industry. Ajeet has 8 year of professional experience, having performed in numerous live gigs. With his soulful voice and versatile range, Anurag is a rising star in the world of Bollywood music.', 2),
(19, 'Varun agrawal', 'varunagrawal67@gmail.com', 'male', '1999-10-16', 'varunagrawal', 624794521, 5, 'a13.jpg', 'This talented and quirky anchor/emcee will make your event larger than life and will keep the crowd cheering for more!', 1),
(20, 'Karan silawat', 'varunagrawal67@gmail.com', 'male', '2000-09-14', 'karansilawat', 954721567, 5, 'a19.jpg', 'Emcee Karan is an acclaimed anchor, entertainer based in Ahmedabad. With nearly a decade full of anchoring experience.', 3),
(21, 'Aarya solanki', 'aaryasolanki28@gmail.com', 'female', '2001-04-17', 'aaryasolanki', 985472428, 5, 'a8.jpg', 'Aarya is a well known EmCee, anchor, showhost, model, TV Presenter and actress and is a well known face in the industry, both in India and Middle East. ', 3),
(22, 'Shruti malik', 'shrutimalik19@gmail.com', 'female', '2001-01-09', 'shrutimalik', 784521648, 5, 'a21.jpg', 'An anchor who really knows how to pull up an event whether it is a corporate event or an entertainment show!', 2),
(23, 'Kangna acharya', 'kangnaacharya33@gmail.com', 'female', '1998-05-13', 'kangnaacharya', 328467945, 5, 'a65.jpg', 'The charisma of an Anchor Is, “Finding Unique way before and after an Event” What’s that One thing that keeps the Guests and Host of the party to remember you? – Its Ice Breaking sessions, Lively Events and Happening moments, which utmost stands out “It’s the Anchor’s – Confidence & Emceeing Skills”', 4),
(24, 'Yamini parihar', 'yaminiparihar11@gmail.com', 'female', '2001-03-07', 'yaminiparihar', 857946178, 5, 'a69.jpg', 'Ahmedabadian by heart and an old soul by nature, Yamini is a warmhearted, approachable, hospitable host with a \'door\'s always open\' attitude at all her events. Her audience\'s are always left spell bound by her innate charm and allure and yet constantly pleasantly surprised by her gracious and friendly demeanor.', 1),
(25, 'Akanksha tiwari', 'akankshatiwari57@gmail.com', 'female', '1998-12-24', 'akankshatiwari', 547813695, 5, 'a73.jpg', 'Hey i am anchor and vo artist based in Ahmedabad...my love for interaction with people led me to the world of anchoring.. every time I step on stage it\'s a new experience and i love to create a value Moment for the audience.', 6),
(26, 'Rahul dhawan', 'rahuldhawan55@gmail.com', 'male', '1999-08-07', 'rahuldhawan', 485123794, 5, 'a86.jpg', 'Rahul dhawan is one of the best anchors in Ahmedabad for all kinds of events such as concerts, corporate events, weddings, press conferences, fashion shows, sangeet ceremonies, sports events and award nights. ', 3),
(27, 'Kishan rajput', 'kishanrajput67@gmail.com', 'male', '1998-11-17', 'kishanrajput', 547821349, 5, 'a94.jpg', 'Kishan is a leading anchor in Ahmedabad who is popular to host a number of events like wedding ceremonies, birthday parties, reception functions and many more. His energy, smile and enthusiasm lights up every atmosphere with great energy. He has hosted several wedding ceremonies and traditional marriage functions in the past.', 2),
(28, 'Anjali upadhyay', 'anjaliupadhyay49@gmail.com', 'female', '2001-01-23', 'anjaliupadhyay', 784578452, 5, 'a82.jpg', 'Anchor Anjali who have been making every moment count in every event & She has done more than 100 shows. Not even that, She always make sure that the audience feel like family to her. she also carries enriched amount of experience of 2 years in anchoring.', 1),
(29, 'Sejal ahuja', 'sejallahuja45@gmail.com', 'female', '1998-07-14', 'sejalahuja', 485123497, 4, 'st10.jpg', 'Sejal is Ahmedabad based Stanp up Comedian. She has done many Gigs. She has 2 years experience.', 1),
(30, 'Kavya batra', 'kavyabatra94@gmail.com', 'female', '1999-06-22', 'kavyabatra', 658216487, 4, 'st13.jpg', 'Born and brought up in Surat, Harshita shifted to Ahmedabad for a job as a Copywriter in an agency. She started out in the comedy scene about a year back.', 2),
(31, 'Divya bhatt', 'divyabhatt82@gmail.com', 'female', '2000-08-09', 'divyabhatt', 324896572, 4, 'st20.jpg', 'Divya is based from Gujarat. she has done so many events. she had experience of 6-7 years. she has talent of doing comedy. she loves to interact with everyone and she loves to make everyone laugh.', 2),
(32, 'Rajni chopra', 'rajnichopra42@gmail.com', 'female', '1999-04-19', 'rajnichopra', 845793126, 4, 'mm92.jpg', 'Rajni is a stand-up comedian based in Ahmedabad with 6 years of experience in the industry. she is known for her sharp wit and observational humor, which resonates with audiences of all ages.', 3),
(33, 'Ankush chawla', 'ankushchawla85@gmail.com', 'male', '1998-10-09', 'ankushchawla', 845796314, 4, 'mm51.jpg', 'I am a stand up comedian My performance is a blend of standup comedy and crowd interaction With content ranging from physical humour to edgy But keeping the primary aim to make people enjoy my vibe', 4),
(34, 'Ajay shah', 'ajayshah1137@gmail.com', 'male', '1999-10-02', 'ajayshah', 648521378, 4, 'mm59.jpg', 'Ajay is a professional comedian based out of Ahmedabad.Doing one of the toughest tasks there is i.e making people laugh, Ajay is Stand Up Comedian who has been leaving people in splits through his comedy for a significant amount of time.', 5),
(35, 'Sumit dixit', 'sumitdixit85@gmail.com', 'male', '1997-02-03', 'sumitdixit', 785632495, 4, 'mm81.heic', 'Sumit dixit Observational and Topical Stand-Up Comedian Hindi, English Sumit dixit, the comedic sensation from the vibrant streets of Ahmedabad, is a master of laughter. With a quick wit and a knack for turning the ordinary into the extraordinary, he has the audience in splits with his hilarious stand-up routines.', 6),
(36, 'Ansh dubey', 'anshdubey74@gmail.com', 'male', '1997-06-24', 'anshdubey', 658214896, 4, 'mm65.jpg', 'I am Ansh dubey am based at Ahmedabad. I done comedy in hindi/punjabi/english languages. I have done couple of tickted shows and corporate shows and have performed for an audience of 2 to 700 + peoples. I love my work. And I feel proud of myself when I stand on stage.', 5),
(37, 'Chirag goswami', 'chiraggoswami81@gmail.com', 'male', '1998-07-29', 'chiraggoswami', 458213678, 2, 'm18.jpg', 'Magician Priya was bitten by the magic bug when she was 3 years old and is practicing magic since then. This girl now is called the Diva of Indian magic, honoured with the prestigious Balgandharv award & is the first indian female magician to win the Merlin Grand Prix Award ( Oscar for magic) by International Magicians society, USA...', 3),
(38, 'Raghav jha', 'raghavjha77@gmail.co', 'male', '1998-10-09', 'raghavjha', 965874231, 2, '1668526887IMG_9856.jpg', ' Here I have already impressed you with my first trick! Magician, Mind Reader, Psychological Illusionist – are just a few words which have been associated with my name through these years. With countless years of practice and by combining sleight of hand, behavioural psychology.', 6),
(39, 'Akshay joshi', 'akshayjoshi56@gmail.', 'male', '1998-05-15', 'akshayjoshi', 258965489, 2, '1594760998IMG_20200211_185059.jpg', 'Akshay is one of the finest Illusionists in India, entertaining a multitude of Corporate groups, weddings, get to gathers, Families and Bollywood personalities. He is also wall of fame winner on JGT.', 4),
(40, 'Paresh kulkarni', 'pareshkulkarni44@gma', 'male', '1999-08-24', 'pareshkulkarni', 859642478, 2, '1659849464IMG-20220710-WA0003.jpg', ' I have done over 5000+ gigs in India and globally. Also won 2nd place in Online International Magic Competition out of 100 participants from 8 different countries.', 1),
(41, 'bhavesh mehta', 'bhaveshmehta@gmail.c', 'male', '1997-03-24', 'bhaveshmehta', 859634859, 2, 'Magical.jpg', 'Bhavesh is an International Entertainer, Popular Magician, Stage Mentalist, Anchor, Creative Illusionist and renowned master of Magic World. He is a Fun Loving Presenter from Lucknow. He has been practicing Magic for 13 years with more than unlimited Shows to his credit all over India.', 3),
(42, 'Vinay rathor', 'vinayrathor53@gmail.', 'male', '1998-11-02', 'vinayrathor', 1238546147, 2, '1609601521praveen1.jpg', 'Vinay is a captivating magician hailing from Ahmedabad, known for his mesmerizing performances that blend mystery, illusion, and charm. With years of experience honing his craft, Vinay has enthralled audiences across the city with his spellbinding acts, making magic come alive with every flourish of his hand.', 1),
(43, 'Raaj modi', 'raajmodi23@gmail.com', 'male', '1999-07-28', 'raajmodi', 456375896, 1, 'dd14.jpg', 'I am Dancer/ Choreographer from GAhmedabad.I have been into this field since past 6 years and I have performed and competed in multiple events and competitions nationally and internationally.', 1),
(44, 'Poonam pandey', 'poonampandey33@gmail.com', 'female', '1998-03-11', 'poonampandey', 856985469, 1, 'dd18.jpg', 'Professionally I am a classical dancer taking degree in bachelors of performing arts Under the guidance of Guru Dr.Shrimati.Kanak Rele In Nalanda nritya Kala Mahavidyalaya. ', 6),
(45, 'Diksha pathak', 'dikshapathak99@gmail.com', 'female', '1999-12-17', 'dikshapathak', 789685879, 1, 'dd24.jpg', 'Diksha is a professional kathak dancer performs across India. She has 8+ years of experience. She has done many gigs. Her genre is classicial kathak, semi classical.', 5),
(46, 'Sushant pratap', 'sushantpratap89@gmail.com', 'male', '2000-10-21', 'sushantpratap', 958734687, 1, 'dd9.jpg', 'Sushant is a professional Dancer based out of the capital city of India, New Delhi. sushant, the dancer, from the capital has a vision of making it big in the Dance industry. ', 4),
(47, 'Kavya pradhan', 'kavyapradhan615@gmai', 'female', '1999-08-04', 'kavyapradhan', 985213648, 1, 'kavya.jpg', 'Kavya is a professional bharathanatyam dancer. She performs & choreographs excellent moves in no time.', 1),
(48, 'Himanshi tejas', 'himanshitejas46@gmai', 'female', '1999-09-18', 'himanshitejas', 698657895, 1, 'dd103.jpg', 'Myself Himanshi from Ahmedabad , gujarat. I am a dance Choreographer and I have my Own YouTube channel - Himanshi I do Choreographies and anchoring for all types of event all across the country.', 2),
(49, 'Manoj rana', 'manojrana48@gmail.co', 'male', '2000-05-24', 'manojrana', 456978855, 1, 'dd109.jpg', '5 year\'s of experience in dancing. I did so many dance styles like - hip hop , bollywood, locking, popping, house ,afro ,dancehall etc. I have done lot\'s of Dance competitions and events + represent my country on international battles in (on-line) platform . Currently participating in special 30 dancer\'s of India 🇮🇳 right now .', 3),
(50, 'Sidharth roy', 'sidharthroy88@gmail.com', 'male', '2001-06-24', '123', 589678542, 1, 'dd114.jpg', 'I am determined and honest . I am a trained dancer and experienced in all styles of dancing . I have many achievements in dancing ...I motivate people through my performance and always try to accomplish my task honestly and fruitfully.', 6),
(51, 'Aayush shastri', 'aayushsastri55@gmail.com', 'male', '1996-10-08', 'aayushshastri', 458967821, 1, '164872627812957557_459028054221965_5642024136320229545_o.jpg', 'His dancing styles are Hip-hop and urban dancing.He has an experience of more than 12 years in this field and has done many shows till date. Sagar has participated in various competitions and events, and he is instantly recognized for his moves and performances.', 4),
(52, 'Ritik varma', 'ritikvarma395@gmail.', 'male', '1998-02-24', 'ritikverma', 589764897, 1, '1634576904107701402_1659095814258782_77419075501503202_n.jpg', 'He has an experience of 10 years in this field and has done more than 1000+ shows.He is more into Bollywood style. Ritik dance and moves are so clean and flexible that he easily grabs attention of the audience and he also makes sure to keep an eye contact with the audience to match the vibe.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(5) NOT NULL,
  `artist_id` int(3) NOT NULL,
  `date_time` datetime NOT NULL,
  `booking_status` varchar(30) NOT NULL,
  `booking_purpose` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `artist_id`, `date_time`, `booking_status`, `booking_purpose`, `user_id`) VALUES
(1, 41, '2024-04-26 13:36:45', 'pending', 'I want magician for my child birthday party.', 15),
(2, 23, '2024-04-20 09:06:45', 'pending', 'I want anchor for my collage farewell.', 1),
(3, 35, '2024-04-21 13:41:15', 'pending', 'i want stand-up comedian for my boys group party.', 13),
(4, 47, '2024-04-23 13:41:15', 'pending', 'I want dancer for my brother\'s wedding.', 4),
(5, 18, '2024-04-22 13:47:48', 'pending', 'I need singer for navratri function. ', 11),
(6, 24, '2024-04-24 09:57:23', 'pending', 'I need a anchor who manage my function.', 3),
(7, 3, '2024-04-30 09:57:23', 'pending', 'i need a dancer for my marriage anniversary', 5),
(8, 36, '2024-04-17 14:32:55', 'pending', 'I need a stand-up comedian artist for my company function.', 7),
(30, 1, '2024-03-27 08:33:00', 'accept', 'I want to host event', 1),
(31, 1, '2024-03-27 08:33:00', 'reject', 'I want to host event', 2),
(32, 1, '2024-03-21 11:55:00', 'accept', 'i want to book you for my bithday party', 1),
(33, 1, '2024-03-30 12:42:00', 'accept', 'I want to book you ', 1),
(34, 1, '2024-03-12 15:57:00', 'reject', 'i want to book for my birthday party', 1),
(35, 1, '2024-03-22 15:58:00', 'Pending', 'hello', 1),
(36, 1, '2024-03-31 16:05:00', 'Pending', 'Hiiiiiii', 1),
(38, 2, '2024-04-04 16:12:00', 'Pending', 'book book', 1),
(39, 1, '2024-04-25 01:35:00', 'reject', 'hello i want to book you for my birthday party', 1),
(40, 2, '2024-04-27 23:36:00', 'Pending', 'hi you are agreat singer i want to book your talent for dance party', 1),
(41, 1, '2024-04-30 10:23:00', 'Pending', 'i want to book for my birthday party ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(5) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `contact_subject` varchar(100) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_name`, `email_id`, `phone_no`, `contact_subject`, `contact_message`) VALUES
(1, 'raju rastogi', 'raju420@gmail.com', 55454545, 'dancer', 'i want to contact you for my birthday party');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(10) NOT NULL,
  `feedback_date` date NOT NULL,
  `artist_id` int(10) NOT NULL,
  `feedback_details` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `artist_id`, `feedback_details`, `user_id`) VALUES
(1, '2023-12-07', 1, 'Our experience with Talent hunt has been beyond expectations. What was outstanding was the speed at which they responded to our requirements, helping us with apt advice, budget customizations with talent profiles, and cost breakups very professionally. Ultimately, a huge part of our event\'s success was finding the right mix of Talent & we owe that to Talent hunt.', 1),
(2, '2024-01-09', 2, 'Having worked with the truly dedicated team at Talent hunt over the past 6 years, I can vouch for their top-notch services. They really go an extra mile to understand your requirements and give you the right recommendations for artists/ celebrities/ speakers at the most competitive prices. We have always been impressed with their high levels of expertise and professionalism.', 2),
(3, '2024-02-24', 3, 'I have been working with the Talent hunt  team for the last 5 years now. They have been exceptional in talent management and execution & are a great partner to our marketing programs. After COVID-19 hit, they\'ve been instrumental in creating some really good Marketing campaigns for us. The innovation brought in by the team to execute virtual engagement/concerts with Talent has been truly exceptional.\r\n', 3),
(4, '2024-03-02', 4, 'Talent hunt has been a wonderful partner to Encompass. They have done over 300 bookings for over 200 shows. I personally like the attention they give to make our job easy. From recommendations to timely reverts, and quick follow-ups to being at the event. They are professional, passionate, and a team whose work we can vouch for! I tip our collective hats to the professionalism of Talent hunt.', 4),
(5, '2024-02-04', 1, 'Working with Talent hunt has always been a pleasurable experience. As soon as we brief them, they become an integral part of the project and own it as much as us. Their unwavering commitment to timely reverts, meeting deadlines, creative involvement, and clear communication sets them apart. Such impeccable service from Talent hunt has helped us in delivering better and greater experiences for our clients.\r\n', 5),
(6, '2024-02-29', 3, 'You guys at Talent hunt do a really good job. It\'s really great how easy you are to deal with formally and informally as well. My campaign goals are achieved seamlessly with you guys. With your expert and timely suggestions, I can now blindly trust you with the process. It\'s almost like having in-house support whom I can depend on at any moment. Thank you for making it so simple and easy for us.', 6),
(7, '2024-03-09', 4, 'Engaging Talent hunt has always been a pleasant experience for us. They have always come up with recommendations that are cost-effective & innovative. Their USP is prompt response & onsite assistance as an extension to the team. A team that is flexible & accommodating in times of need is what sets them apart. Wishing them a bright future!!!\r\n', 7),
(8, '2024-02-14', 2, 'Working with Talent hunt Talent Solutions & Consulting is always a wonderful experience. With quick responses and deliverables; they continue to exceed our expectations time and again. It is their competitive pricing and consistently high standards of work that sets them apart from others. Thank you Talent hunt!', 8),
(12, '2024-03-27', 1, 'you are a great singer', 1),
(13, '2024-04-27', 2, 'you are a great singer', 1),
(14, '2024-04-27', 2, 'you are a great singer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `message_id` int(5) NOT NULL,
  `artist_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `message_question` text NOT NULL,
  `message_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `artist_id`, `user_id`, `message_question`, `message_datetime`) VALUES
(1, 2, 2, 'I want to Book dancer for my sister marriage', '2024-03-22 12:24:27'),
(2, 2, 1, 'I want to Book dancer for my sister marriage', '2024-03-22 12:25:17'),
(3, 2, 5, 'I want to Book dancer for my sister marriage', '2024-03-22 12:25:36'),
(4, 2, 4, 'I want to Book dancer for my sister marriage', '2024-03-22 12:29:13'),
(5, 1, 1, 'Nice', '2024-03-27 04:01:42'),
(7, 1, 1, 'i want to book you for my party', '2024-03-27 11:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(5) NOT NULL,
  `artist_id` int(3) NOT NULL,
  `photo_path` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `artist_id`, `photo_path`) VALUES
(14, 3, 'dd1.jpg'),
(15, 3, 'dd3.jpg'),
(16, 3, 'dd6.jpg'),
(17, 3, 'dd5.jpg'),
(18, 3, 'dd2.jpg'),
(19, 1, 'ss1.jpg'),
(20, 1, 'ss2.jpg'),
(21, 1, 'ss3.jpg'),
(22, 1, 'ss4.jpg'),
(23, 2, 'ss5.jpg'),
(24, 2, 'ss6.jpg'),
(25, 2, 'ss8.jpg'),
(26, 2, 'ss9.jpg'),
(27, 2, 'ss7.jpg'),
(28, 7, 'ss10.jpg'),
(29, 7, 'ss11.jpg'),
(30, 7, 'ss13.jpg'),
(31, 7, 'ss14.jpg'),
(32, 7, 'ss12.jpg'),
(33, 8, 'ss16.jpg'),
(34, 8, 'ss17.jpg'),
(35, 8, 'ss18.jpg'),
(36, 8, 'ss15.jpg'),
(37, 9, 'ss19.jpg'),
(38, 9, 'ss23.jpg'),
(39, 9, 'ss22.jpg'),
(40, 9, 'ss21.jpg'),
(41, 9, 'ss20.jpg'),
(42, 46, 'dd7.jpg'),
(43, 46, 'dd8.jpg'),
(44, 46, 'dd10.jpg'),
(45, 46, 'dd11.jpg'),
(46, 46, 'dd9.jpg'),
(53, 12, 'm9.jpg'),
(54, 12, 'm8.jpg'),
(55, 12, 'm6.jpg'),
(56, 12, 'm7.jpg'),
(57, 13, 'm11.jpg'),
(58, 13, 'm12.jpg'),
(59, 13, 'm13.jpg'),
(60, 13, 'm10.jpg'),
(61, 14, 'm2.jpg'),
(62, 14, 'm3.jpg'),
(63, 14, 'm4.jpg'),
(64, 14, 'm5.jpg'),
(65, 14, 'm1.jpg'),
(66, 15, 'm14.jpg'),
(67, 15, 'm15.jpg'),
(68, 15, 'm16.jpg'),
(69, 15, 'm17.jpg'),
(70, 37, 'm22.jpg'),
(71, 37, 'm21.jpg'),
(72, 37, 'm20.jpg'),
(73, 37, 'm19.jpg'),
(74, 37, 'm18.jpg'),
(75, 43, 'dd12.jpg'),
(76, 43, 'dd13.jpg'),
(77, 43, 'dd15.jpg'),
(78, 43, 'dd14.jpg'),
(79, 4, 'st2.jpg'),
(80, 4, 'st3.jpg'),
(81, 4, 'st4.jpg'),
(82, 4, 'st5.jpg'),
(83, 4, 'st1.jpg'),
(84, 29, 'st6.jpg'),
(85, 29, 'st7.jpg'),
(86, 29, 'st9.jpg'),
(87, 29, 'st8.jpg'),
(88, 29, 'st10.jpg'),
(89, 30, 'st11.jpg'),
(90, 30, 'st12.jpg'),
(91, 30, 'st14.jpg'),
(92, 30, 'st13.jpg'),
(93, 5, 'st18.jpg'),
(94, 5, 'st16.jpg'),
(95, 5, 'st17.jpg'),
(96, 5, 'st19.jpg'),
(97, 5, 'st15.jpg'),
(98, 31, 'st21.jpg'),
(99, 31, 'st22.jpg'),
(100, 31, 'st23.jpg'),
(101, 31, 'st20.jpg'),
(102, 6, 'a1.jpg'),
(103, 6, 'a2.jpg'),
(104, 6, 'a3.jpg'),
(105, 6, 'a5.jpg'),
(106, 6, 'a4.jpg'),
(107, 21, 'a10.jpg'),
(108, 21, 'a6.jpg'),
(109, 21, 'a7.jpg'),
(110, 21, 'a9.jpg'),
(111, 21, 'a8.jpg'),
(112, 19, 'a11.jpg'),
(113, 19, 'a12.jpg'),
(114, 19, 'a14.jpg'),
(115, 19, 'a15.jpg'),
(116, 19, 'a13.jpg'),
(117, 20, 'a17.jpg'),
(118, 20, 'a16.jpg'),
(119, 20, 'a17.jpg'),
(120, 20, 'a20.jpg'),
(121, 20, 'a19.jpg'),
(122, 22, 'a23.jpg'),
(123, 22, 'a24.jpg'),
(124, 22, 'a22.jpg'),
(125, 22, 'a21.jpg'),
(126, 44, 'dd19.jpg'),
(127, 44, 'dd16.jpg'),
(128, 44, 'dd17.jpg'),
(129, 44, 'dd18.jpg'),
(130, 45, 'dd20.jpg'),
(131, 45, 'dd22.jpg'),
(132, 45, 'dd25.jpg'),
(133, 45, 'dd23.jpg'),
(134, 45, 'dd24.jpg'),
(136, 47, 'saumyakamble_official-20240415-0002 .jpg'),
(137, 47, 'saumyakamble_official-20240415-0003.jpg'),
(138, 47, 'saumyakamble_official-20240415-0004.jpg'),
(139, 47, 'saumyakamble_official-20240415-0005.jpg'),
(140, 47, 'kavya.jpg'),
(141, 48, 'dd101.jpg'),
(142, 48, 'dd102.jpg'),
(143, 48, 'dd103.jpg'),
(144, 48, 'dd104.jpg'),
(145, 48, 'dd105.jpg'),
(147, 49, 'dd106.jpg'),
(148, 49, 'dd107.jpg'),
(149, 49, 'dd108.jpg'),
(150, 49, 'dd109.jpg'),
(151, 49, 'dd110.jpg'),
(152, 50, 'dd111.jpg'),
(153, 50, 'dd112.jpg'),
(154, 50, 'dd113.jpg'),
(155, 50, 'dd114.jpg'),
(156, 50, 'dd115.jpg'),
(158, 16, 'ss51.jpg'),
(159, 16, 'ss52.jpg'),
(160, 16, 'ss53.jpg'),
(161, 16, 'ss54.jpg'),
(162, 16, 'ss55.jpg'),
(163, 17, 'ss56.jpg'),
(164, 17, 'ss57.jpg'),
(165, 17, 'ss58.jpg'),
(166, 17, 'ss59.jpg'),
(167, 17, 'ss60.jpg'),
(168, 17, 'ss61.jpg'),
(169, 10, 'ss66.jpg'),
(170, 10, 'ss67.jpg'),
(171, 10, 'ss68.jpg'),
(172, 10, 'ss69.jpg'),
(173, 10, 'ss70.jpg'),
(174, 11, 'ss71.jpg'),
(175, 11, 'ss72.jpg'),
(176, 11, 'ss73.jpg'),
(177, 11, 'ss74.jpg'),
(178, 11, 'ss75.jpg'),
(179, 18, 'ss81.jpg'),
(180, 18, 'ss82.jpg'),
(181, 18, 'ss83.jpg'),
(183, 18, 'ss84.jpg'),
(184, 18, 'ss85.jpg'),
(185, 33, 'mm51.jpg'),
(186, 33, 'mm52.jpg'),
(187, 33, 'mm53.jpg'),
(188, 33, 'mm54.jpg'),
(189, 33, 'mm55.jpg'),
(190, 34, 'mm56.jpg'),
(191, 34, 'mm57.jpg'),
(192, 34, 'mm58.jpg'),
(193, 34, 'mm59.jpg'),
(194, 34, 'mm60.jpg'),
(195, 35, 'mm81.heic'),
(196, 35, 'mm82.heic'),
(197, 35, 'mm83.heic'),
(198, 35, 'mm84.heic'),
(199, 35, 'mm85.heic'),
(200, 36, 'mm61.jpg'),
(201, 36, 'mm62.jpg'),
(202, 36, 'mm63.jpg'),
(203, 36, 'mm64.jpg'),
(204, 36, 'mm65.jpg'),
(205, 36, 'mm66.jpg'),
(206, 32, 'mm91.jpg'),
(207, 32, 'mm92.jpg'),
(208, 32, 'mm93.jpg'),
(209, 32, 'mm94.jpg'),
(210, 32, 'mm95.jpg'),
(211, 23, 'a61.jpg'),
(212, 23, 'a62.jpg'),
(213, 23, 'a63.jpg'),
(214, 23, 'a64.jpg'),
(215, 23, 'a65.jpg'),
(216, 24, 'a66.jpg'),
(217, 24, 'a67.jpg'),
(218, 24, 'a68.jpg'),
(219, 24, 'a69.jpg'),
(220, 24, 'a70.jpg'),
(221, 25, 'a71.heic'),
(222, 25, 'a72.heic'),
(223, 25, 'a73.jpg'),
(224, 25, 'a74.heic'),
(225, 25, 'a75.heic'),
(226, 28, 'a81.jpg'),
(227, 28, 'a82.jpg'),
(228, 28, 'a83.jpg'),
(229, 28, 'a84.jpg'),
(230, 28, 'a85.jpg'),
(231, 26, 'a86.jpg'),
(232, 26, 'a87.jpg'),
(233, 26, 'a88.jpg'),
(234, 26, 'a89.jpg'),
(235, 26, 'a90.jpg'),
(236, 27, 'a91.jpg'),
(237, 27, 'a92.jpg'),
(238, 27, 'a93.jpg'),
(239, 27, 'a94.jpg'),
(240, 27, 'a95.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(5) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'Dancer'),
(2, 'Magician'),
(3, 'Singer'),
(4, 'Stand-up-Comedian'),
(5, 'Anchors');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `user_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `gender`, `phone_no`, `email_id`, `user_password`) VALUES
(1, 'Akash margaj', 'male', 859746848, 'akashmargaj88@gmail.com', '321'),
(2, 'Praveen rajput', 'male', 124879546, 'praveenrajput77@gmail.com', 'praveenraj'),
(3, 'Harendra kushwah', 'male', 789587954, 'harendrakushwah96@gmail.c', 'harendraku'),
(4, 'Sadhna patil', 'female', 985879684, 'sadhnapatil22@gmail.com', 'sadhnapati'),
(5, 'Sangita patel', 'female', 857962189, 'sangitapatelo66@gmail.com', 'sangitapat'),
(6, 'Sneha sharma', 'female', 785498564, 'snehasharma554@gmail.com', 'snehasharm'),
(7, 'Upendra chauhan', 'male', 598521468, 'upendrachauhan25@gmail.co', 'upendracha'),
(8, 'Ganesh panchal', 'male', 147894587, 'ganeshpanchal687@gmail.co', 'ganeshpanc'),
(9, 'Rajesh sikarwar', 'male', 857946857, 'rajeshsikarwar111@gmail.c', 'rajeshsika'),
(10, 'Harsh chawla', 'male', 587964875, 'harshchawla897@gmail.com', 'harshchawl'),
(11, 'Priti nayak', 'female', 598658794, 'pritinayak596@gmail.com', 'pritinayak'),
(12, 'Khusbu yadav', 'female', 458796587, 'khusbuyadav455@gmail.com', 'khusbuyada'),
(13, 'Sunil gupta', 'male', 458745966, 'sunilgupta654@gmail.com', 'sunilgupta'),
(14, 'Roshni mishra', 'female', 54845489, 'roshnimishra564@gmail.com', 'roshnimish'),
(15, 'Aniket gujjar', 'male', 789685975, 'aniketgujjar158@gmail.com', 'aniketgujj'),
(16, 'raaj kumar', 'male', 569823489, 'raaj@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tbl_artist`
--
ALTER TABLE `tbl_artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_artist`
--
ALTER TABLE `tbl_artist`
  MODIFY `artist_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
