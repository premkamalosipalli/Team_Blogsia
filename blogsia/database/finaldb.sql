-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 05:39 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsiadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `profilepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `username`, `password`, `emailid`, `contactNo`, `profilepic`) VALUES
(1, 'Keya', 'keya', 'keyashah@gmail.com', '9845679345', '2.jpg'),
(2, 'admin123', 'admin000', 'adminshah@gmail.com', '8965231475', '6.jpg'),
(3, 'Jinal', 'test', 'jinal@gmail.com', '7854123589', '4.jpg'),
(4, 'Shivani', 'shivani000', 'shivanirotliwala79@gmail.com', '9876543021', 'Shivani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `articleid` int(11) NOT NULL,
  `articletitle` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `featuredimage` varchar(100) NOT NULL,
  `createdt` date NOT NULL,
  `userid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarticle`
--

INSERT INTO `tblarticle` (`articleid`, `articletitle`, `description`, `featuredimage`, `createdt`, `userid`, `subcatid`, `views`, `status`) VALUES
(12, 'On a dashing day out at The Vintage Emporium', 'Step back in time with G.M Norton as he searches for his holy grail - a gentlemanly existence! His blog is all about chivalry, good manners and his own inimitable style!\r\n\r\nFind out why he thinks Martin Freeman has peacock tendencies (it’s a good thing)! Or check out his moustache grower’s guide. While he admits sporting a ‘tache makes eating and drinking a touch bothersome, he’s full of tricks: “cut up your food into small pieces; if you’re eating buttery toast, turn it upside down; use tea spoons and straws; and open your mouth extra wide!”', 'vintage2.jpg', '2020-06-11', 22, 1, 0, 0),
(13, 'Looking every bit the vintage blogger in her Vivien of Holloway circle dress', 'In 2008, Gemma started Retro Chick to support her now defunct eBay shop.\r\n\r\nA diehard vintage clothing fan, Gemma writes a lot about vanity sizing – she’s even been on Radio 4 Woman’s Hour to talk about it! Find out why she thinks vanity sizing is killing you.\r\n\r\nShe also offers practical fashion advice, such as her Lazy Girl\'s Guide to Winter Dressing. Tops tips include stocking up on pashminas, scouring “old lady shops” for thermals and planning go-to outfits in advance. Gemma’s favourite failsafe is \"a black jersey dress and longline cardigan worn with a belt, opaque tights and a beret.” Very suave!', 'vintage5.jpg', '2020-06-09', 15, 1, 0, 0),
(14, 'We Wore What', '\"We Wore What\" is the brainchild of Danielle Bernstein, who launched her passion for fashion project while a student at New York City\'s Fashion Institute of Technology. What began as a daily outfit inspiration blog has grown into an aspirational site for those who crave all things beautiful, with posts covering fashion, decor, and lifestyle. Still, it\'s the fashion photos that keep many of Danielle\'s million-plus followers coming back, as \"Who Wore What\" shares impeccably curated and styled outfits from its founder\'s daily charmed life.', 'chic1.jpg', '2020-06-16', 18, 4, 0, 0),
(15, 'Girl with Curve', 'Plus-size fashion and beauty blogger Tanesha Awasthi shares her fabulous outfit inspirations, style advice, and makeup tutorials on the popular \"Girl With Curves.\" As a little girl, Tanesha dreamed of being a designer or a stylist, and she channels her love for fashion into the charming outfits that she styles and posts on her blog. With a modern, sophisticated and ladylike style sensibility that blends Audrey Hepburn and Olivia Palermo (with a bit of occasional edge), Tanesha builds many of her looks starting with her favorite closet staples, a great pair of dark wash jeans, a tailored blazer and classic pointy toe pump.', 'chic4.jpg', '2020-06-02', 18, 4, 0, 0),
(16, 'HOW TO IDENTIFY INDIAN EMBROIDERIES LIKE A PRO', 'It’s impossible not to be mesmerised by the arts and crafts of India when living in the country especially when there are rich textiles, colourful artwork, intricate embroideries and complicated weaves at nearly every corner. Artisans from the foothills of the Himalayas to the tip of the Kanyakumari have been churning out gorgeous creations over generations. But for the lovers of Indian fashion, it’s the often confusing yet absolutely intriguing embroideries that remain a mystery. This is especially true for those who don’t live in India because they aren’t interacting with these indigenous crafts on a regular interactions.', 'embroideries_cover.jpg', '2020-06-02', 18, 13, 0, 0),
(17, 'Serious Eats', 'Serious Eats takes a different approach with what they post, the art of cooking is more their thing with an extensive section on technique. They post unique recipes unlike like seen before and they have a whole section that is dedicated to grilling different types of foods. They also have sections on food histories and know your ingredients page. Most of their techniques are also trailblazers. Like their name, they are more serious but audacious and inventive.', 'american.jpg\r\n', '2020-06-09', 17, 15, 0, 0),
(18, 'Love And Margarita', 'I can’t think of a better way to kick off the weekend than with this watermelon margarita recipe! It’s super easy to make (no cocktail shaker required!), and its vibrant color just screams summer. Thanks to the watermelon, it’s naturally sweet, and plenty of lime juice gives it a delicious tart finish. It’s a fun cocktail to enjoy on its own, but if you want to take this watermelon margarita to the next level, serve it with tortilla chips, guac, and your favorite salsa. Cheers, friends, and happy summer! How to Make a Watermelon Margarita Unlike a classic margarita, which…', 'food2.jpg', '2020-06-01', 16, 16, 0, 0),
(19, 'The Dal Chawal Story', 'When I hear ‘Dal Chawal’ the first word which comes to my mind is ‘comfort food’.\r\n\r\nComfort food is food that provides a nostalgic or sentimental value to someone, and may be characterized by its high caloric nature, high carbohydrate level, or it may be a simple preparation. The nostalgia may be specific to an individual, or it may apply to a specific culture.\r\n    We are now citizens of global village, the world has “shrunk”, and we are a single community linked by social media and telecommunication. Due to this food has travelled across cultures & continents.\r\n', 'food4.jpg', '2020-05-12', 16, 17, 0, 0),
(20, 'My Little Expat Kitchen', 'My Little Expat Kitchen is the brainchild of Magda, born and raised in Athens. Leaving her homeland in 2007 in search for a bit of adventure and another culture, she landed in The Hague in the Netherlands. With a love for cooking, she created the food blog as a hobby in 2009. Little did she know that she would even get recognition for it. In 2015, she was awarded Best Cooking Blog at the Food Blog Awards. Available in English and Greek, My Little Expat Kitchen is a great blog to introduce yourself to Greek cooking.', 'greek5.jpg', '2020-03-11', 15, 18, 0, 0),
(21, 'Living the french life in Paris', 'If you like French food to hit the sweet spot, American David Lebovitz’s blog is a must-read. David’s something of a pioneer in the food blogger world since his Living the sweet life in Paris has been around since 2004 when blogging was virtually unheard of.\r\n\r\nA pastry chef by training, David offers an eclectic blend of contents on his blog. The homepage takes you right into the heart of Parisian foodie culture with reviews of eateries (bakeries, ice cream parlours, restaurants…). He also lists his favourite places to eat in Paris – insights that are always useful when you’re visiting a city. And his top picks take you on and off the beaten tourist trail.', 'ft1.jpg', '2020-03-11', 15, 19, 0, 0),
(22, ' MANUFACTURING TRANSFORMATION', 'Hosted by Apriso Corporation, the stated mission of the Manufacturing Transformation blog is “to provide a community forum to discuss various facets of today’s global manufacturing transformation.” Publishing frequently and with an extensive list of thought leaders guest blogging for them, this site is a great example of content that touches on real pain points of the industry while completely eschewing promotional posts (always a smart move – content marketing should never be just about your products/services)\r\n   ', 'Industrial_manufacturing.jpg', '2020-04-12', 15, 21, 0, 0),
(23, 'U.S. Veterans  Experience Significant Increase In Telemedicine Use', 'The United States Department of Veterans Affairs has announced a 17% percent jump in telemedicine use amongst veterans within the past year alone, with more than 2.6 million telehealth care services delivered. The announcement follows the completion of the first full fiscal year of the department’s  Anywhere to Anywhere program–an initiative which enables VA health care teams to treat veteran regardless of location, including across state lines. Officials noted that “approximately two-thirds of the 294,000 VA Video Connect appointments in FY 2019 were for tele-mental health visits,” and include critical care services such as suicide prevention. In a statement, VA Secretary Robert Wilkie shared: “We want every Veteran to have a choice to schedule an in-person, telephone or video visit with their providers depending on their preferences for health care delivery.”\r\n\r\n', 'medical.jpg\r\n', '2020-06-01', 16, 23, 0, 0),
(24, 'Factories of the Future: Automation, Robotics and Manufacturing', 'Automation is the biggest change manufacturing has ever seen. Manufacturing is constantly being presented with new unique challenges as the world surges forward with technological and innovative advances:\r\nconnectedness breeds a “need for speed” in production and delivery,climate change calls for “green” processes and packaging, the social media boom means anything from bad press to faulty items to recalls go viral quickly— highlighting a need for damage control policies. Manufacturing must be able to quickly adapt, act, and react at lightning speeds.\r\nSustainable practices are not limited to mechanical and machining practicalities. The human element must not be forgotten when thinking of the factory processes of the future. Appropriate training and education, safety requirements, ergonomics, and employee well being play a major role in maintaining the future of our factories, our manufacturing, and our economic infrastructure.\r\n', 'automation.jpg', '2020-05-21', 17, 24, 0, 0),
(25, 'Agriculture Land as a Component of Your Investments', 'As per the investment returns consider agricultural land their area unit two ways that to form cash on a chunk of farmland; capital appreciation and financial gain. Capital appreciation means that if the worth of the land goes up then the capitalist will sell it for a profit. Financial gain from a farm can either be from rented money or crop share. Money rent is calculated by bucks per cultivated acre. The alternative to money rent as mentioned earlier could be a crop share, whenever once the crops harvested and sold-out, the landowner gets a share of the sales. In most cases crop share makes more cash for the owner, however, it’s conjointly additional risky.', 'realestate_agr.jpg', '2020-05-21', 23, 25, 0, 0),
(26, 'Things You Should Know About Commercial Property Ownership', 'Commercial property ownership is not an easy thing as it involves a lot of money. If you see someone who owns a commercial complex, you call them a millionaire.\r\n\r\nYou know why?\r\n\r\nDeep down, you know that he owns something that generates a huge revenue every single month. If he is gonna sell, he will get crores of money for sure.\r\n\r\nCommercial property is something that’s not going to depreciate. Day by day, the property value is going to increase. There are so many benefits of owning a commercial property.\r\n\r\nAll these benefits come to the ones who are willing to invest a huge amount. Either you can buy a complex or build a complex, it’s up to you.', 'realestate_com.jpg', '2020-06-01', 20, 28, 0, 0),
(27, 'Think smart before buying a land', 'Buying a land in today’s real estate market requires smart thinking. Owning a piece of land can provide security and peace of mind to our lives. Since real-estate is a fast-paced market, you have to strike the right deal at the right time which is important. In this blog, we will brainstorm smart tips to consider while purchasing a land that can benefit.\r\nSince the real-estate market is fast-paced, it is advisable to do your initial research about current trends. Often times, there are a large variations in the land value owing to location and infrastructure facilities. It is sensible to get a feel for the market and know what your piece of land is worth. \r\n', 'realestate_res.jpg', '2020-05-11', 25, 26, 0, 0),
(28, 'The Rise & Growth of Industrial Real Estate', 'Commercial real estate is not limited to offices and retail spaces, but also includes industrial real estate. Unlike other commercial real estate investments, industrial properties are long-term investments that provide more stability. Depending on their location and use, industrial spaces can classified as –\r\n\r\nManufacturing – A major chunk of real estate land for industrial use is for manufacturing of goods. This would include heavy manufacturing like manufacturing of cars, production of edible goods etc. and light assembly units which would just be a unit where parts are assembled and stored and then shipped to different destinations.\r\n\r\nStorage and distribution – These spaces are mostly warehouses where goods are stored for transfer, and include distribution and general purpose warehouses. An important aspect of the distribution warehouse is location. Being situated at commercial hubs with easy access to arterial roads and major cities is a high priority. The general purpose wareho', 'realestate_ind.jpg', '2020-00-01', 24, 29, 0, 0),
(29, 'Nancy, from Just One Way Ticket', 'Now, whether you consider yourself a “kickass chick” or not, that is genuinely one fun blog to read! Alice Teacake has been travelling around the globe for the past 8 years and what I truly like about her blog is that it reads like the notes of an 8 year challenge to one’s self. After all, travel isn’t about simply switching destinations rapidly and posting lots of photos on Instagram. It’s a journey of self discovery, and Alice has a lot to share. You’ll find tips on what to do before your trip, where to go, how to earn money if you were planning on sticking around for a bit longer, where and what to buy… in other words, it’s a gem for the solo traveller!\r\n\r\n“I believe in travelling solo to face your fears, push your boundaries and reach your full potential. Empower yourself and you will be able to then empower others.”', 'solo.jpg', '2020-05-12', 24, 30, 0, 0),
(30, 'ROYAL WEDDINGS ARE USUALLY PUBLIC HOLIDAYS', 'A national holiday is usually declared when there is a royal wedding. When Wills and Kate tied the knot back in 2011, they declared it a Royal Wedding Bank Holiday. But Prince Harry and Meghan Markle have decided to wed on a Saturday, meaning no holiday necessary!\r\n\r\nThis one came at a surprise to us too! Apparently male royals and aristocrats do not wear wedding bands after they say I do. The only royal to break this tradition was Prince Charles. Go figure.', 'royal.jpg', '2020-02-15', 21, 36, 0, 0),
(31, 'Maldives the place of Happiness\r\n', 'The Maldives is a serene destination embellished with alluring beaches, painted landscapes, and tranquil shores. It provides the space for a perfect summer vacation as you can bask under the sun and relax to the sound of the waves. Summers, especially, is a good time to visit the Maldives because there are many water sports and activities that you can enjoy such as snorkeling, parasailing, scuba diving, surfing and much more.\r\n\r\nMaldives in summer is blissful and pristine and is an ideal retreat from the warm winds from the rest of the world. There are many places that you can explore during this time without worrying about the weather as that is one thing that will always be there on your side on your trip. Let us have a quick sneak-peek into the wonderment that the Maldives is during the season of summer.', 'Maldives.jpg', '2020-01-19', 15, 33, 0, 0),
(32, 'Rainbow Room Wedding', 'Somia and Jared had a beautiful Rainbow Room wedding in New York.  It was my first Muslim marriage ceremony and I loved learning about the traditions and customs.  Somia wore two stunning gowns by Zara Shahjahan with jewelry from Neemar, and Jared wore a classic black tuxedo.  The bridesmaids wore different gowns, but in a complimentary palette ranging from champagne to blush with sequin details.  \r\n\r\nIn new york event planning, new york venues, new york wedding planning, real wedding Tags rainbow room wedding, heather waraksa, poppies and posies, ron ben-israel cakes, south asian wedding, cross cultural wedding, summer wedding, classic.', 'cultural.jpeg', '2020-05-12', 19, 34, 0, 0),
(33, 'THE ADVENTURE BEGINS...', 'Thanks to a loose thread of an email and a mind set on exploring the potential for legendary Himalayan mountain biking ahead, I introduced myself to Mandil Pradhan, long time Nepali pro rider, a thriving mountain bike guide and business owner. Fortunately, our paths came to cross through our mutual support of the recent film \"RJ Ripper\" by our friend in common and super ripper in his own right, Joey Schusler. Mandil was a key player in producing the film, but more importantly, Mandil is the one behind pioneering a lot of the mountain bike scene in Nepal and helping Rajesh Magar (commonly known as RJ) find his path to freedom and his career as today\'s top rider in Nepal. Running all of the on-ground operations and guide services for Sacred Rides Mountain Bike Adventures, offering multi-day mountain bike trips and cultural immersions into the Himalayan highlands, Mandil hired RJ as a guide and has helped him over the past few years to connect with sponsors and refine his talents as a mou', 'adv.jpg', '2019-06-23', 23, 32, 0, 0),
(34, 'A Stunning Bridesmaid Shoot with the Bride & her Tribe in Gorgeous Outfits', 'We\'ve said it before and we\'re saying it now, \"your bridesmaids deserve all your love and attention for the unsung heroes, the backbone, and the saviours that they\'ve always been to you.\" We hold a special place in our hearts for all the bridesmaids \'cuz we know how we women just can\'t do without them. Which is why we\'re always up with ideating you in all the adorable and mushy ways in which you can pamper your girlies and let them know how much you love them. Be it DIY-ing cute gifts for them all by yourself or popping up the \"will you be my bridesmaid?\" question, we\'re flooded with all the \"sisters before misters\" ideas ladies.', 'KB_PHOTOWORKS-6496.jpg', '2020-02-03', 19, 34, 0, 0),
(35, 'Stay up to date with the newest email marketing and email delivery tips, industry updates.', 'The main goals of email marketing are nurturing new leads, converting them to customers, and increasing sales. Unsurprisingly, the majority of blogs by email marketing automation platforms target e-commerce, where email marketing is one of the most efficient channels. On most blogs, you will find templates and tricks for Black Friday and Christmas email campaigns, techniques to improve personalization, as well as ways to grow your subscriber list. We feature several engaging, meaningful, and visually attractive blogs here.  ', 'marketing1.jpg', '2020-03-05', 19, 37, 0, 0),
(36, 'Transactional Marketing Automation', 'Because transactional emails function as a way to close the loop on a process someone has already started with you, people expect and often look forward to these emails. Imagine if the e-commerce shop you just bought sneakers from never sent you an order confirmation. What goes through your mind? Questions like “Did my order go through?” and “Am I going to get my sneakers?!” These touchpoints are an opportunity for marketers to build credibility, give customers peace of mind, and ultimately improve the customer experience. In this post, you’ll learn six transactional email best practices. You’ll also notice some overlap with traditional marketing email and while the line between the two can seem blurry, transactional emails have their own purpose and constraints which we’ll address throughout. Let’s dive in.', 'download.jpg', '2020-03-14', 15, 38, 0, 0),
(37, 'Cause Marketing Resources:Essential Blogs\r\n', 'A blog is a versatile tool for people to share their insights, experience, opinions, and expertise, among other things. The five blogs presented here are regularly updated with content on cause marketing and related topics. Collectively, they offer a wealth of information that is interesting and useful to both causes and companies that want to learn more about cause marketing and how to execute successful programs.', 'download (1).jpg', '2020-01-18', 15, 39, 0, 0),
(38, 'The unwritten history of American Hibernianism by Kerron Ó Luain', 'Despite being, at the turn of the twentieth century, the largest Irish nationalist organisation in the world, and to this day counting tens of thousands of members in the US, the Ancient Order of Hibernians (AOH) have not received any book-length academic treatment to date. A recent spell spent on a Fulbright Scholarship in the US spurred me to going some way towards rectifying this. Using nineteenth-century American newspapers, held mainly in the digital repositories of the Library of Congress, Chronicling America, I was able to piece together the history of US Hibernianism from its emergence in the 1850s until its first major public rift in 1884. The resulting article, published in the current instalment of Social History, focusses on the class tensions within this ‘broad church’ nationalist movement. ', 'socialhistpry.jpg', '2019-09-26', 26, 44, 0, 0),
(39, 'What my credit can do in (medieval) Venice', 'There is a lot to be admired in Austrian economists, their resilience, their attachment to simple elegant ideas and their sound understanding of the long-term factors that give the economy its cyclical nature. But one must admit that their Ludite-like hatred for finance is to the very least puzzling. They claim to trust nothing but gold and they would like to see the activity of banks restricted to little more than a locker service. Their trust in free market and in the adaptive nature of human ingenuity ends at the door of their local branch of HSBC.', 'economic.png', '2019-12-12', 26, 45, 0, 0),
(40, 'The Late Blooming of Artist From Indiana', 'Since at least the late-19th century, art galleries and critics have focused most of their attention on young, emerging artists. This strategy has paid off for savvy dealers and galleries, as these rising stars of the art world have brought in large amounts of money and produced blockbuster shows. The downside of this trend for the artists themselves, is that it can be difficult to find places to exhibit and sell their work as they get older. This is especially disappointing, as many artists peak later in life and produce their best work in their golden years. In this way, an artist’s best work might go largely unappreciated.', 'Screen-Shot-2020-03-13-at-6.40.13-PM.png', '2020-05-04', 17, 43, 0, 0),
(41, 'Female entrepreneurship in England and Wales, 1851-1911 by Carry van Lieshout', 'The conventional image of an entrepreneur in Victorian Britain is a captain of industry, heading an engineering or steel factory employing hundreds of workers, and generally pictured with an impressive moustache. But men like that were only the tip of a very large, and much more diverse entrepreneurial iceberg. My research shows that close to 30% of businesses in Victorian Britain were run by women, a proportion that was much larger than hitherto estimated. This work is based on the new British Business Census of Entrepreneurs, created at the University of Cambridge as part of the project ‘Drivers of Entrepreneurship’ under Professor Robert Bennett.', 'socialhistory.jpg', '2019-08-20', 20, 44, 0, 0),
(42, 'Get Rich Slowly', 'Like many successful personal finance sites, Get Rich Slowly highlights the story of the struggles of the founder, J.D. Roth. In his bio, he says he started in 2006 to document his efforts to get out of debt. These are compelling articles that are not hypothetical situations. Instead, they represent his real-life struggles to learn how to manage his finances.', 'download (3).jpg', '2019-02-22', 16, 48, 0, 0),
(43, 'Mental Health Blogs to Read for Total Wellness in 2020', 'There are thousands of mental health bloggers out there, but these top 100 mental health blogs and are particularly powerful sources of insight, wisdom and support. The following bloggers have been carefully awarded spots on this list for their exemplary work and high ranking among the world’s long list of anxiety blogs, bipolar disorder blogs, depression blogs, eating disorder blogs, OCD blogs, PTSD blogs and more.  \r\n\r\nThis ultimate list is curated with the top bloggers who have successfully used their stories to dismantle stigma, change lives, and rewrite the mental health narrative. The following blogs feature content on a variety of mental health topics which include everything from depression blogs to OCD blogs to PTSD blogs and other mental health blogs. \r\n\r\nIf you are looking for motivation, information or simply a supportive online community, the following mental health blogs are an excellent place to start.', 'download (2).jpg', '2020-01-01', 21, 46, 0, 0),
(44, 'Tiny Buddha', 'Tiny Buddha is the go-to spiritual blog for anyone seeking simple ways to get a little peace of mind. What is most notable about this blog is that topics are always timely, while they contain pearls of wisdom that are timeless. Focus is on not letting bumps in the road get you down and living simply even though we live in a world that is often chaotic. If you are interested in starting a wellness journey, take part in our 66-Day Wellness Challenge to instill healthy habits that will enable you to be more resilient to the curve balls that life throws at you. The blog is run by Lori Deschene, however experts from a variety of fields contribute posts.', '03A25448-400x400.jpg', '2020-05-12', 24, 47, 0, 0),
(45, 'It’s a natural mood lifter', 'Regular physical activity can relieve stress, anxiety, depression and anger. You know that \"feel good sensation\" you get after doing something physical? Think of it as a happy pill with no side effects! Most people notice they feel better over time as physical activity becomes a regular part of their lives.\r\n\r\nWithout regular activity, your body slowly loses its strength, stamina and ability to function properly. It’s like the old saying: you don’t stop moving from growing old, you grow old from stopping moving. Exercise increases muscle strength, which in turn increases your ability to do other physical activities. ', 'fitness1.jpg', '2020-03-12', 19, 49, 0, 0),
(46, 'California Case Law', 'FindLaw\'s legal professional blogs provide attorneys and other legal professionals with the latest news and information that affects the legal profession uniquely, focusing on legal technology news, practice tips, and firm management information.\r\n\r\nLaw practice is a lifestyle. Whether you\'re a 1L, or an experienced BigLaw associate, find the latest news and tips for your professional life.', 'legal-practice.png', '2019-04-12', 22, 50, 0, 0),
(47, 'Civil Procedure & Federal Courts Blog', 'One of the top blogs about civil law is something called the Civil Procedure & Federal Courts Blog. As part of the law professors blog network, it features articles and content created by professors working in some of the nation’s top law schools. Some of the articles include extensive research and links to cases taking place right now, but others are more technical in nature and are better suited for students and legal professionals.', 'Blogs-About-Civil-Law-768x536.jpg', '2020-03-25', 22, 51, 0, 0),
(48, 'Anticipatory Bail and Children in Conflict with Law', 'A constitutional bench of the Supreme Court in Gurubakash Singh Sibbia v. State of Panjab (1980) while distinguishing normal bail from anticipatory bail held that while the former is granted after an arrest, releasing a person from the custody of the police, the latter is granted in anticipation of arrest and is therefore effective at the very moment of arrest. The Court laid down certain guidelines in light of the conditions under Section 438 of the Code of Criminal Procedure, 1973 (‘the Code’).', 'bail.jpg', '2020-06-05', 22, 52, 0, 0),
(49, 'Conference Announcement: Global Administrartive Law Approaches to the COVID-19 Pandemic', 'The School of Law of the Singapore Management University is organising a virtual Conference on Global Public-Private Law Approaches to the COVID-19 Pandemic that will explore in detail the impact of the COVID-19 pandemic within the public and private law spheres, with a view to furthering comparative insight and learning into how different legal systems around the world have grappled with particular public and private law aspects of the pandemic.\r\nThe virtual conference will take place on Thursday, 10 September 2020. Further details and the attached call for papers (abstracts due 15 June 2020) may be found at this link: https://law.smu.edu.sg/covid19.', 'download (4).jpg', '2020-06-12', 22, 54, 0, 0),
(50, 'Peterloo', 'Another of Mike Leigh’s occasional forays into historical drama (see Vera Drake, Mr Turner), Peterloo concerns the massacre of innocent protesters in St Peter’s Field, Manchester in 1819, an event that reshaped the political and social landscape of Britain (and led to the founding of this publication). Starring Maxine Peake and Pearce Quigley, the film is expected to be released towards the end of 2018, ahead of the bicentennial anniversary of the disaster in 2019.', '1345.jpg', '2020-01-13', 17, 55, 0, 0),
(51, 'We’re in a golden age of black horror films', 'In the horror genre, black is definitely back.\r\n\r\nThe movie “Ma,” which premieres on May 31, will star Academy Award winner Octavia Spencer as Sue Ann, a lonely middle-age woman who clings to a group of teens to the point of obsession.\r\n\r\n“Ma” comes on the heels of Jordan Peele’s critically acclaimed “Us,” which is also led by an Academy Award winner, Lupita Nyong\'o. And let’s not forget that Peele’s previous film, “Get Out,” won the Academy Award for best screenplay last year.\r\n\r\nBlack actors have always had a role in horror films. But something different is taking place today: the re-emergence of true black horror films.', 'file-20191028-113962-lsw4vk.jpg', '2019-04-12', 16, 56, 0, 0),
(52, '\'An Insignificant Man\'', 'Directed by Khushboo Ranka and Vinay Shukla, \'An Insignificant Man\' is a 2017 socio-political documentary based on the rise of Aam Aadmi Party (AAP) led by Arvind Kejriwal and how they shook Indian politics while trying to keep their ideology alive. The film featured Kejriwal, Manish Sisodia, Yogendra Yadav and Santosh Koli in pivotal roles.The movie was about the rise of anti-corruption movement in India by AAP and how it gained traction through its campaigns. It captured the day-to-day functioning of AAP from December 2012 till December 2013 ending with the Delhi elections. The movie was appreciated by critics and audiences and enjoyed a good theatrical run.\r\n\r\n', 'download (7).jpg', '2020-01-01', 17, 58, 0, 0),
(53, 'The Asian Art Circle ', 'A travelling curator’s guide to the ins and outs of Asia’s premier art destinations, personalities, movements and events. Kiong has been traveling for the art trade ever since the early 1990’s and has amassed a great degree of knowledge about Chinese, Japanese and Singaporean art topics.\r\n\r\nAt Artsculptor, they tackle the issues and discoveries of sculpture artists around the world. The blog provides you with insight on trends, galleries, people and art movements.', 'download (5).jpg', '2020-03-23', 18, 59, 0, 0),
(54, 'Most Influential Music Blogs 2020', 'Never underestimate the power of music blogs in a marketplace where an almost unlimited number of voices are screaming for attention. We look at the Top 25 of the 200 most influential music blogs of 2020, whether you\'re trying to find new music to listen to or get your music \'discovered\'.\r\n\r\nLooking to get your music out there amongst the tastemakers? Well first you need amazing music, because contacting top blogs with mediocre recordings that get thousands of submissions a month never makes an impact.', 'download (6).jpg', '2019-04-12', 18, 60, 0, 0),
(55, 'AM I OUT OF IDEAS? HOW TO HANDLE A CREATIVE DRY SPELL', 'You shake your pen and nothing comes out, but it’s not the ink that’s dry—it’s your idea well. If you’re feeling stuck beyond writer’s block, feeling uninspired, or even anxious about writing, you might be hitting a dry spell. Whether\r\n\r\n', '12-Poetry-Prints-to-Decorate-Your-Walls-With-e1591654959168.jpg', '2020-06-09', 18, 61, 0, 0),
(56, 'A Dancer’s Life', 'A Dancer’s Life is aimed at inspiring, educating, and empowering the dancer.\r\n\r\nThe blog is produced by Energetiks, an Australian dance fashion brand that was founded in Melbourne in 1988.\r\n\r\nThe blog celebrates “all aspects of dance and fitness through sharing knowledge, inspiration, tips, news and interviews,” the site says.\r\n\r\nA Dancer’s Life is an attractive site.', 'steezy.png', '2020-06-16', 16, 62, 0, 0),
(57, 'Subtilians', 'Keeping up to date with what\'s occurring within the architectural and design world is an important part of our professional development, and so here we have a selection of our favourite (and best) most visited blogs and websites.\r\nThese offer a range of project and peer reviews, image based publications, daily news and updates, architectural forums, architecture narratives and the latest trends, technologies and regulations.\r\n\r\nSubtilitas has been set up by jeff kaplon (a Los Angeles based designer) and is much like Divisare in the way that it has fewer featuring architectural and design projects but only features high level examples of design', 'Archisoup-best-architecture-design-blogs.jpg', '2020-03-12', 23, 63, 0, 0),
(58, 'First-Ever Internationally Recognized Formal Educational Program for Refugees Launches In Syria', 'SAN JOSE, Calif., Sept. 12, 2019 /PRNewswire/ -- Offering formal education within volatile regions globally, World Refugees School (WRS) proudly announces the successful delivery of its first wave of student graduation certificates, quality assured by the internationally recognized organisation, City & Guilds, to more than 6,000 students across six different locations in North Syria. \r\n\r\nWRS, a nonprofit organization providing formal education for refugee and displaced children worldwide, has officially received Assured status for its K-12 program by City & Guilds - a global leader in skills development. This demonstrates the high quality of the program, making it the first and only formally accredited refugee education program in the world.', 'download (11).jpg', '2019-02-12', 19, 64, 0, 0),
(59, 'Practices to facilitate informal learning', 'Educating children and young people is the main concern of parents starting with the potty and ending with a good college. And even though formal education is definitely important and plays a big role in their development, it’s actually but a small piece of the picture', 'images.jpg', '2019-12-12', 19, 65, 0, 0),
(60, 'Society’s Growing Need for Non-Formal Education', 'Our traditional system of formal education – with a teacher or professor in front of a classroom of passive listeners, backed up with a blackboard and lots of chalk – is becoming increasingly unfit for purpose. It’s generally good at tackling the basic needs of a fairly homogeneous group of people – mainly children and young adults from 6 to 18 with the possibility of ‘extension’ to college or university for those who ‘performed well’ in the first two levels of the system. But today’s world needs so much more', 'iStock-592687014.jpg', '2020-04-05', 20, 66, 0, 0),
(61, 'Creative Bloom being creative', 'There are many times when we suffer creative block, struggling to figure out what to draw, design or make next. No matter what our creative field, we all need regular inspiration to help us on our way.\r\n\r\nThere are many times when we suffer creative block, struggling to figure out what to draw, design or make next. No matter what our creative field, we all need regular inspiration to help us on our way.', 'images (1).jpg', '2019-05-30', 15, 67, 0, 0),
(62, 'Farnoosh Brock, Prolific Living', 'Brock, who recently left a very successful corporate career to pursue her goal of helping others to lead passion-driven lives, draws on her own experience to write about living life to its fullest, trusting your instincts, and following your dreams. She doesn’t tolerate senseless self-pity—and she speaks authentically here, because she’s been through personal struggles herself. Instead, Brock offers practical advice on getting to know yourself, finding your path, and staying motivated in your corporate job. This is a must-read for anyone who needs a little push and a lot of inspiration!', 'download (8).jpg', '2019-02-12', 21, 68, 0, 0),
(63, 'WOMEN IN STEM–FIGHTING THE GENDER GAP IN SCIENCE', 'Women in STEM (WiSTEM) was founded in March 2017 to combat the systemic gender disparity within science, technology, engineering, and mathematics (STEM) and has become a powerhouse since then. As an entirely student-run organization, WiSTEM simultaneously empowers girls to pursue STEM and teaches them the leadership skills necessary to succeed. WiSTEM spans three countries, forty-four chapters, and over one thousand members, creating a strong coalition of girls who together help tackle the gap between the disparate number of feminine presenting individuals and men in STEM.', 'download (9).jpg', '2020-03-10', 25, 70, 0, 0),
(64, 'Social Media Today', 'Another top social media marketing blog that should be bookmarked is Social Media Today; this immensely popular blog is an impressive library of social media marketing content, whether it’s news or tips.\r\n\r\nThe blog relies on a huge network of regular contributors who post content on any and all social media topics you can think of.', 'download (10).jpg', '2019-08-20', 22, 71, 0, 0),
(65, 'Why social commerce will rule social media in 2020', 'What’s coming to social media in 2020?\r\n\r\nIt can be hard to predict the future, especially for something as fast-changing as social media. But if you look to today’s trends and the latest buzz, you’ll start to see the signs.\r\n\r\nSocial commerce is one of the hottest trends in social media today, and it looks to have an even bigger impact in 2020.\r\n\r\nContinue reading to find out the latest on what social commerce is, what it looks like, and how you can make the most of this buzzworthy new channel to further your brand and your business', 'download (13).jpg', '2020-06-02', 16, 74, 0, 0),
(66, 'Network effect and the New Sharing Economy', 'The article discusses the role of network effects on market power in sharing economies. This business model, based around peer to peer market interactions, has given rise to a host of fast-growing, powerful start-ups. “Unicorns are startup companies that have not generated a single cent in revenue but are able to marshal multimillion-dollar amounts of capital from investors and cross the one-billion-dollar threshold in market value.” Rather, these companies are valued on the basis of the number of customers they attract and the amount of traffic that goes through their ecosystem every day, which in turn translates to market power in their respective markets. This shows how in this market, network effect that a product produces in of itself is worth billions of dollars.', 'download (12).jpg', '2020-06-16', 16, 75, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblarticlesave`
--

CREATE TABLE `tblarticlesave` (
  `articelsaveid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarticlesave`
--

INSERT INTO `tblarticlesave` (`articelsaveid`, `userid`, `articleid`) VALUES
(16, 21, 25),
(17, 23, 41),
(18, 15, 56),
(19, 18, 15),
(20, 22, 37),
(21, 20, 42),
(22, 24, 16),
(23, 15, 16),
(24, 17, 37),
(25, 18, 56),
(26, 18, 49),
(27, 19, 24),
(28, 16, 15),
(29, 24, 49);

-- --------------------------------------------------------

--
-- Table structure for table `tblarticletag`
--

CREATE TABLE `tblarticletag` (
  `articletagid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `tagid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarticletag`
--

INSERT INTO `tblarticletag` (`articletagid`, `articleid`, `tagid`) VALUES
(1, 52, 51),
(2, 56, 59),
(3, 25, 22),
(4, 55, 64),
(5, 48, 44),
(6, 48, 53),
(7, 34, 31),
(8, 34, 32),
(9, 46, 44),
(10, 37, 26),
(11, 61, 19),
(12, 24, 21),
(13, 42, 42),
(14, 42, 50),
(15, 15, 8),
(16, 16, 56),
(17, 16, 10),
(18, 21, 16),
(19, 13, 6),
(20, 18, 13),
(21, 31, 30),
(22, 32, 31),
(23, 53, 64),
(24, 50, 27),
(25, 35, 67),
(26, 23, 52),
(27, 58, 61),
(28, 41, 38),
(29, 26, 65),
(30, 44, 40),
(31, 20, 15),
(32, 54, 25),
(33, 60, 63),
(34, 30, 31),
(35, 65, 48);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categoryid`, `categoryname`) VALUES
(1, 'Food Culture'),
(2, 'Fashion'),
(3, 'Technology'),
(4, 'Real Estate'),
(5, 'Travel'),
(6, 'Wedding'),
(7, 'Marketing'),
(8, 'History'),
(9, 'Health'),
(10, 'Law'),
(11, 'Movie'),
(12, 'Art'),
(13, 'Education'),
(14, 'Lifestyle'),
(15, 'Social Media');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `stateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'Surat', 1),
(2, 'Mumbai', 2),
(3, 'Gandhinagar', 1),
(4, 'Ahemdabad', 1),
(5, 'Nagpur', 2),
(6, 'Nasik', 2),
(7, 'Shergarh', 3),
(8, 'Firozabad', 3),
(17, 'Haryana', 6),
(18, 'Amritsar', 6),
(19, 'Kochi', 7),
(20, 'Khollam', 7),
(21, 'Chennai', 8),
(22, 'Madurai', 8),
(23, 'Jaipur', 10),
(24, 'Udaipur', 10),
(25, 'Kolkata', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE `tblcomment` (
  `commentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `createdt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomment`
--

INSERT INTO `tblcomment` (`commentid`, `userid`, `articleid`, `comment`, `createdt`) VALUES
(8, 5, 4, 'Beautiful Picture', '2020-05-31'),
(11, 5, 4, 'beautiful', '2020-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `companyid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `companytitle` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`companyid`, `username`, `password`, `companytitle`, `website`, `Description`, `logo`, `email`) VALUES
(1, 'huda', 'huda123', 'Huda Beauty', 'www.hudabeauty.com', 'Huda Beauty is a cosmetics line launched in 2013 by Iraqi-American businesswoman and makeup artist, Huda Kattan.', 'huda.png', 'huda@gmail.com'),
(2, 'Reliance', 'reliance', 'Reliance Pvt Ltd', 'www.reliance.com', 'We build to Spread Love', 'reliance.jpg\r\n', 'reliance@gmail.com'),
(4, 'Nestle', 'nestle', 'Nestle Company', 'www.nestle.com', 'We bring reasons for happiness', 'nestle.jpg', 'nestle@gmail.com'),
(5, 'Gucci', 'gucci123', 'Gucci Luxurious Brand Pvt.Ltd.', 'www.gucci.com', 'We make fashion for Luxury', 'gucci.jpg', 'gucci@gmail.com'),
(6, 'MAC', 'mac123', 'Make-Up Art Cosmetics', 'www.mac.com', 'Unmatched Quality lies in your faith', 'mac.png\r\n', 'mac@gmail.com'),
(7, 'Apple Watch', 'apple123', 'Apple Series Watch', 'www.iwatch.com', 'Smart Watch is a smart wearable wrist device which can leave your phone behind', 'apple.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblfollow`
--

CREATE TABLE `tblfollow` (
  `followid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `followerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfollow`
--

INSERT INTO `tblfollow` (`followid`, `userid`, `followerid`) VALUES
(11, 21, 15),
(12, 21, 22),
(13, 24, 17),
(14, 23, 15),
(15, 15, 16),
(16, 16, 19),
(17, 17, 24),
(18, 23, 22),
(19, 19, 17),
(20, 15, 17),
(21, 21, 26),
(22, 25, 16),
(23, 23, 15),
(24, 16, 21),
(25, 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbllike`
--

CREATE TABLE `tbllike` (
  `likeid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllike`
--

INSERT INTO `tbllike` (`likeid`, `articleid`, `userid`) VALUES
(37, 52, 21),
(38, 56, 15),
(39, 25, 26),
(40, 52, 26),
(41, 55, 19),
(42, 37, 19),
(43, 47, 18),
(44, 46, 20),
(45, 25, 26),
(46, 62, 16),
(47, 42, 15),
(48, 24, 23),
(49, 49, 16),
(50, 49, 16),
(51, 24, 17),
(52, 62, 17),
(53, 15, 18),
(54, 37, 20),
(55, 34, 19),
(56, 45, 19),
(57, 30, 15),
(58, 37, 15),
(59, 13, 15),
(60, 20, 15),
(61, 21, 15),
(62, 22, 15),
(63, 31, 15),
(64, 36, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tblpartnershipoffer`
--

CREATE TABLE `tblpartnershipoffer` (
  `offerid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `minfollowers` varchar(10) NOT NULL,
  `maxfollowers` varchar(10) NOT NULL,
  `minprice` int(11) NOT NULL,
  `maxprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpartnershipoffer`
--

INSERT INTO `tblpartnershipoffer` (`offerid`, `companyid`, `title`, `description`, `minfollowers`, `maxfollowers`, `minprice`, `maxprice`) VALUES
(1, 1, 'Brand Collab', 'To promote huda eyeshadows', '10k', '1m', 5000, 10000),
(3, 2, 'Reliance in every phone', 'Whenever we see nature we feel mesmerized and always feel fresh.', '1k', '10k', 1, 5),
(4, 2, 'JIO MART', 'JioMart is an online selling channel (format) of Reliance Retail Limited.\r\n\r\nWe offer you convenience of shopping everything that you need for your home - be it fresh fruits & vegetables, cereals, packaged food, bakery & dairy, frozen & pet food, household cleaning items to your specialised beauty & personal care products from a single virtual store.', '1k', '10k', 1000, 5000),
(5, 4, 'Nestle truffle Jr 1.5 Unflavored 250ML', 'Chocolate truffles are always a favorite, as are sought-after British chocolate candy bars and praline cremes from Germany. We had to include chocolate and peanut butter candies from Reese\'s, and there\'s even a gluten-free option, too. These chocolate gift boxes make for sweet gift ideas for anyone on your list', '500', '10k', 2000, 8000),
(6, 1, 'Discount of 70% on Lipsticks,\r\nFirst Come First Serve', 'Offer starts on 6/8/2020 and ends at 3:00am EST on 6/15/2020. Customers can choose 7 full-sized best-sellers for $63 (a value up to 75% off). Select items can only be chosen from HTTPS://WWW.HUDA.COM/CHECKOUT/WP_SAMPLES_LANDING.TMPL in order to receive offer. A total of 7 items must be selected. If less than 7 items are selected, customer will not be able to proceed through checkout with offer. Each shade in your selection must be unique. All sales are final and non-refundable. ', '100k', '1m', 10000, 20000),
(8, 5, 'This might interest you about Gucci .', 'Gucci is an Italian brand which offers fashion and leather goods. Gucci is one of the world’s leading luxury brands. In India the brand is a hit among the elite class of people and all its bags, shoes, watches etc are bought with great enthusiasm.', '1m', '10m', 20000, 50000),
(9, 5, 'Black Friday Sale', 'Gucci offers a very luxurious brand sale on the occassion of MOTHERS DAY. Grab Exciting gifts for your mother and show your eternal love to them', '10k', '100k', 5000, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tblpatnershipresponse`
--

CREATE TABLE `tblpatnershipresponse` (
  `responseid` int(11) NOT NULL,
  `offerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `totalfollowers` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatnershipresponse`
--

INSERT INTO `tblpatnershipresponse` (`responseid`, `offerid`, `userid`, `offerprice`, `totalfollowers`, `message`, `status`) VALUES
(1, 5, 20, 6000, '800k', 'Post will be posted on dark chocolate', 0),
(2, 4, 25, 2000, '5k', 'I will post the article before the deadline', 0),
(3, 6, 26, 18000, '950k', 'Let me know the details', 0),
(4, 1, 15, 6000, '10k', 'I agree to your offer but can you pay more', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`stateid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra'),
(3, 'Delhi'),
(4, 'Karnataka'),
(6, 'Punjab'),
(7, 'Kerela'),
(8, 'Tamil Nadu'),
(10, 'Rajasthan'),
(11, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `subcatid` int(11) NOT NULL,
  `subcatname` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`subcatid`, `subcatname`, `categoryid`) VALUES
(1, 'Vintage', 2),
(4, 'Chic', 2),
(7, 'Casual ', 2),
(13, 'Traditional', 2),
(15, 'American', 1),
(16, 'Italian', 1),
(17, 'Indian', 1),
(18, 'Greek', 1),
(19, 'French ', 1),
(20, 'Mechanical', 3),
(21, 'Industrial and Manufacturing', 3),
(22, 'Communication', 3),
(23, 'Medical', 3),
(24, 'Electronic', 3),
(25, 'Agricultural', 4),
(26, 'Residential', 4),
(27, 'Special Use', 4),
(28, 'Commercial', 4),
(29, 'Industrial ', 4),
(30, 'Solo Trips', 5),
(31, 'Business tours', 5),
(32, 'Adventurous Trips', 5),
(33, 'Luxury Travel', 5),
(34, 'Cultural Weddding', 6),
(35, 'Pre- Wedding', 6),
(36, 'Royal Wedding', 6),
(37, 'Internet Marketing', 7),
(38, 'Transactional', 7),
(39, 'Cause Marketing', 7),
(40, 'Undercover Marketing', 7),
(41, 'Political', 8),
(42, 'Diploamtic', 8),
(43, 'Cultural', 8),
(44, 'Social', 8),
(45, 'Economic ', 8),
(46, 'Mental', 9),
(47, 'Spiritual', 9),
(48, 'Financial', 9),
(49, 'Physcial', 9),
(50, ' Common or Case Law', 10),
(51, 'Civil Law (Private law)', 10),
(52, 'Criminal Law.', 10),
(53, 'Equity Law.', 10),
(54, 'Administrative Law', 10),
(55, 'Thriller', 11),
(56, 'Horror 	', 11),
(57, 'Crime Films', 11),
(58, 'Political Conspiracies', 11),
(59, 'Sculpture.', 12),
(60, 'Music.', 12),
(61, 'Poetry.', 12),
(62, 'Dance.', 12),
(63, 'Architecture.', 12),
(64, 'Formal', 13),
(65, 'Informal', 13),
(66, 'Non-Formal', 13),
(67, 'Creative.', 14),
(68, 'Corporate', 14),
(70, 'Activist', 14),
(71, 'Social networking sites.', 15),
(72, 'Image sharing sites.', 15),
(73, 'Video hosting ', 15),
(74, 'Community blogs', 15),
(75, 'Sharing economy networks', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbltag`
--

CREATE TABLE `tbltag` (
  `tagid` int(11) NOT NULL,
  `tagname` varchar(50) NOT NULL,
  `subcatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltag`
--

INSERT INTO `tbltag` (`tagid`, `tagname`, `subcatid`) VALUES
(6, '#blackwhite', 1),
(7, '#19\'slook', 1),
(8, '#lovechic', 4),
(9, '#comfy', 7),
(10, '#rituals', 13),
(11, '', 15),
(12, '#burger', 15),
(13, '#spices', 17),
(14, '#falvours', 17),
(15, '#greekplatter', 18),
(16, '#frieslove', 19),
(17, '#engineers', 20),
(18, '#machines', 21),
(19, '#sustainablemode', 22),
(20, '#selfcare', 23),
(21, '#automobiles', 24),
(22, '#motherland', 25),
(23, '#homeland', 26),
(24, '#Empowerment', 29),
(25, '#fun ', 30),
(26, '#corporatelife', 31),
(27, '#adventure  ', 32),
(28, '#mountains', 32),
(29, '#beach', 32),
(30, '#classy', 33),
(31, '#customs', 34),
(32, '#photoshoot', 35),
(33, '#bigfatwedding', 36),
(34, '#socialplatform', 37),
(35, '#moneyflow', 38),
(36, '#pastpolitics', 41),
(37, '#pastrituals', 43),
(38, '#oldgolddays', 44),
(39, '#moneypossionofhistory', 45),
(40, '#peacefulmind', 46),
(41, '#calmsoul', 47),
(42, '#moneycontrol', 48),
(43, '#outerfitness', 49),
(44, '#dailyissues', 50),
(45, '#offense', 52),
(46, '#socialconflicts', 51),
(47, '#allegations', 52),
(48, '#socialconflicts', 51),
(49, '#allegations', 52),
(50, '#management', 54),
(51, '#suspense', 55),
(52, '#darknight', 56),
(53, '#Crimescene', 57),
(54, '#blackmoney ', 58),
(55, '#politicalaggression', 58),
(56, '#ancientculture', 59),
(57, '#loveformusic', 60),
(58, '#heartspeaks', 61),
(59, '#devotion', 62),
(60, '#uniqueness', 63),
(61, '#chalktalkmethod', 64),
(62, '#learnwithteechnology', 65),
(63, '#basicknowledge', 66),
(64, '#creativeideas', 67),
(65, '#workforlife', 68),
(66, '#countrylove', 70),
(67, '#socialmedia', 71),
(68, '#easytransfer', 72),
(69, '#groupworkingtogether', 74);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `website` varchar(500) DEFAULT NULL,
  `ytlink` varchar(500) DEFAULT NULL,
  `fblink` varchar(500) DEFAULT NULL,
  `instalink` varchar(500) DEFAULT NULL,
  `linkedinlink` varchar(500) DEFAULT NULL,
  `profilepic` varchar(100) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `cityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userid`, `username`, `password`, `email`, `contact`, `website`, `ytlink`, `fblink`, `instalink`, `linkedinlink`, `profilepic`, `bio`, `cityid`) VALUES
(15, 'Aneree Jasani', 'aneree123', 'anereejasani12@gmail.com', '8908790987', 'www.blogsia.com', 'www.yt.com', 'www.facebook.com', 'www.insta.com', 'www.linkedin.com', 'female1.jpg', 'Rise and Shine', 1),
(16, 'Shivani Rotliwala', 'shivani123', 'shivani79@gmail.com', '8790987890', 'www.blogsiaworld.com', 'www.youtube.com', 'www.fb.com', 'www.insta.com', 'www.linkedin.com', 'female2.jpg', 'Believe In Yourself', 2),
(17, 'Keya Shah', 'keya123', 'keyashah080899@gmail.com', '8976890987', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkedin.com', 'female3.jpg', 'Happiness Lies in One ownself', 4),
(18, 'Bhakti Chevli', 'bhakti123', 'bhakti@gmail.com', '8976543456', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkin.com', 'f4.jpg', 'Dance is life', 3),
(19, 'Daisy Shah', 'daisy123', 'daisy12@gmail.com', '8768909876', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkin.com', 'q1.jpg', 'Education makes us a better person', 25),
(20, 'Shreya Kinariwala', 'shreya123', 'shreya@gmail.com', '8790987890', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkin.com', 'f5.jpg', 'Love without limits', 6),
(21, 'Aarush Panchal', 'aarush123', 'aarush@gmail.com', '8767890987', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkin.com', 'male1.jpg', 'Together we could be unstoppable.', 3),
(22, 'Arhaan Chauhan', 'arhaan123', 'arhaan12@gmail.com', '7890987654', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.link.com', 'casual4.jpg', 'I\'m so deep even the ocean gets jealous', 23),
(23, 'Utkarsh Narola', 'utkarsh123', 'utkarsh34@gmail.com', '8765897689', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkin.com', 'male3.jpg', 'Don\'t care what you say about me I like the way I am.', 19),
(24, 'Nancy Bhatiya', 'nancy123', 'nancyb@gmail.com', '9870654321', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.insta.com', 'www.linkin.com', 'f6.jpg', 'Just be yourself, no one is better', 18),
(25, 'Henil Majumdar', 'henil123', 'henil45@gmail.com', '8765980987', 'www.blog.com', 'www.yt.com', 'www.fb.com', 'www.faceb.com', 'www.linkin.com', 'male4.jpg', 'Classy n Sassy', 8),
(26, 'Fenal Bodkhas', 'fenal123', 'fenal45@gmail.com', '7865908790', 'www.blog.com', 'www.fb.com', 'www.faceb.com', 'www.instagram.com', 'www.lkin.com', 'f10.jpg', 'Love Is Eternal', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblarticle`
--
ALTER TABLE `tblarticle`
  ADD PRIMARY KEY (`articleid`),
  ADD KEY `fkk` (`userid`),
  ADD KEY `Fkey` (`subcatid`);

--
-- Indexes for table `tblarticlesave`
--
ALTER TABLE `tblarticlesave`
  ADD PRIMARY KEY (`articelsaveid`),
  ADD KEY `foreign key` (`articleid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `tblarticletag`
--
ALTER TABLE `tblarticletag`
  ADD PRIMARY KEY (`articletagid`),
  ADD KEY `fkeyy` (`tagid`),
  ADD KEY `key` (`articleid`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`cityid`),
  ADD KEY `Foriegn Key` (`stateid`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `articleid` (`articleid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `tblfollow`
--
ALTER TABLE `tblfollow`
  ADD PRIMARY KEY (`followid`),
  ADD KEY `tblfollow_ibfk_1` (`userid`),
  ADD KEY `tblfollow_ibfk_2` (`followerid`);

--
-- Indexes for table `tbllike`
--
ALTER TABLE `tbllike`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `k` (`articleid`),
  ADD KEY `keyy` (`userid`);

--
-- Indexes for table `tblpartnershipoffer`
--
ALTER TABLE `tblpartnershipoffer`
  ADD PRIMARY KEY (`offerid`),
  ADD KEY `companyid` (`companyid`);

--
-- Indexes for table `tblpatnershipresponse`
--
ALTER TABLE `tblpatnershipresponse`
  ADD PRIMARY KEY (`responseid`),
  ADD KEY `offerid` (`offerid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `Foriekk` (`categoryid`);

--
-- Indexes for table `tbltag`
--
ALTER TABLE `tbltag`
  ADD PRIMARY KEY (`tagid`),
  ADD KEY `foriegn` (`subcatid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `fk` (`cityid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `articleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tblarticlesave`
--
ALTER TABLE `tblarticlesave`
  MODIFY `articelsaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblarticletag`
--
ALTER TABLE `tblarticletag`
  MODIFY `articletagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblcomment`
--
ALTER TABLE `tblcomment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfollow`
--
ALTER TABLE `tblfollow`
  MODIFY `followid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbllike`
--
ALTER TABLE `tbllike`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tblpartnershipoffer`
--
ALTER TABLE `tblpartnershipoffer`
  MODIFY `offerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpatnershipresponse`
--
ALTER TABLE `tblpatnershipresponse`
  MODIFY `responseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbltag`
--
ALTER TABLE `tbltag`
  MODIFY `tagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblarticle`
--
ALTER TABLE `tblarticle`
  ADD CONSTRAINT `Fkey` FOREIGN KEY (`subcatid`) REFERENCES `tblsubcategory` (`subcatid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkk` FOREIGN KEY (`userid`) REFERENCES `tbluser` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblarticlesave`
--
ALTER TABLE `tblarticlesave`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`articleid`) REFERENCES `tblarticle` (`articleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblarticlesave_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tbluser` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblarticletag`
--
ALTER TABLE `tblarticletag`
  ADD CONSTRAINT `fkeyy` FOREIGN KEY (`tagid`) REFERENCES `tbltag` (`tagid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key` FOREIGN KEY (`articleid`) REFERENCES `tblarticle` (`articleid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD CONSTRAINT `Foriegn Key` FOREIGN KEY (`stateid`) REFERENCES `tblstate` (`stateid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblfollow`
--
ALTER TABLE `tblfollow`
  ADD CONSTRAINT `tblfollow_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tbluser` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblfollow_ibfk_2` FOREIGN KEY (`followerid`) REFERENCES `tbluser` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbllike`
--
ALTER TABLE `tbllike`
  ADD CONSTRAINT `k` FOREIGN KEY (`articleid`) REFERENCES `tblarticle` (`articleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keyy` FOREIGN KEY (`userid`) REFERENCES `tbluser` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpartnershipoffer`
--
ALTER TABLE `tblpartnershipoffer`
  ADD CONSTRAINT `tblpartnershipoffer_ibfk_1` FOREIGN KEY (`companyid`) REFERENCES `tblcompany` (`companyid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpatnershipresponse`
--
ALTER TABLE `tblpatnershipresponse`
  ADD CONSTRAINT `tblpatnershipresponse_ibfk_1` FOREIGN KEY (`offerid`) REFERENCES `tblpartnershipoffer` (`offerid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblpatnershipresponse_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `tbluser` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `Foriekk` FOREIGN KEY (`categoryid`) REFERENCES `tblcategory` (`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbltag`
--
ALTER TABLE `tbltag`
  ADD CONSTRAINT `foriegn` FOREIGN KEY (`subcatid`) REFERENCES `tblsubcategory` (`subcatid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `fk` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
