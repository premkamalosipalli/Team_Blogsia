-- Dumping data for table `tblcompany`
INSERT INTO `tblcompany` (`companyid`, `username`, `password`, `companytitle`, `website`, `Description`) VALUES
(1, 'huda', 'huda123', 'Huda Beauty', 'www.hudabeauty.com', 'Huda Beauty is a cosmetics line launched in 2013 by Iraqi-American businesswoman and makeup artist, Huda Kattan.'),
(2, 'Reliance', 'reliance', 'Reliance Pvt Ltd', 'reliance@gmail.com', 'We build to Spread Love');

-- Dumping data for table `tbladmin`
INSERT INTO `tbladmin` (`adminid`, `username`, `password`, `emailid`, `contactNo`, `profilepic`,`companyid`) VALUES
(1, 'Prem', 'osipalli', 'premkamalosipalli@gmail.com', '2149307886', '2.jpg',1),
(2, 'admin123', 'admin', 'adminshah@gmail.com', '8965231475', '6.jpg',2),
(3, 'keya', 'keya', 'keya@gmail.com', '7854123589', '4.jpg',1);

-- Dumping data for table `tbluser`
INSERT INTO `tbluser` (`userid`, `username`, `password`, `email`, `contact`, `website`, `adminid`) VALUES
(2, 'shivani', 'shivani123', 'shivani@gmail.com', '9876543210', 'www.google.com', 1),
(5, 'Keya', 'keya123', 'keyashah080899@gmail.com', '9857412630', 'www.Google.com', 3),
(6, 'Prem', 'prem123', 'premkamalosipalli@gmail.com', '2149307886', 'www.google.com', 2),
(7, 'Mahesh', 'mahesh123', 'mahesh@gmail.com', '942103657', 'www.Google.com', 1);

-- Dumping data for table `tblpartnershipoffer`
INSERT INTO `tblpartnershipoffer` (`offerid`, `companyid`, `title`, `description`, `minfollowers`, `maxfollowers`, `minprice`, `maxprice`,`userid`) VALUES
(1, 1, 'Brand Collab', 'To promote huda eyeshadows', '10k', '1m', 5000, 10000,2),
(2, 2, 'Brand Collab', 'To promote huda eyeshadows', '10k', '1m', 5000, 10000,5);

-- Dumping data for table `tblpatnershipresponse`
INSERT INTO `tblpatnershipresponse` (`responseid`, `offerid`, `userid`, `offerprice`, `totalfollowers`, `message`, `status`) VALUES
(1, 1, 5, 6000, '800k', 'abcd', 0),
(2, 2, 6, 6000, '800k', 'abcd', 0);

-- Dumping data for table `tblsocial`
INSERT INTO `tbsocialacc` (`socialid`, `userid`, `ytlink`, `fblink`, `instalink`, `linkedinlink`, `profilepic`, `bio`) VALUES
(1, 2, 'www.youtube.com', 'www.fb.com', 'www.ig.com', 'www.linkedin.com', 'girl.jpg', 'If I cannot do great things, I can do small things in a great way.\r\n'),
(2, 5, 'www.Youtube.com', 'www.Facebook.com', 'www.Instagram.com', 'www.Linkedin.com', '6.jpg', '\r\nwe only live once'),
(3, 6,  'www.Youtube.com', 'www.facebook.com', 'www.instagram.com', 'www.linkedin.com', '2.jpg', 'Blogs'),
(4, 7,  'www.youtube.com', 'www.facebk.com', 'www.insta.com', 'www.link.com', '2.jpg', 'Blogs');

-- Dumping data for table `tblzipcode`
INSERT INTO `tbzipcode` (`zipcodeid`,  `state`, `city`) VALUES
(1, 'Par Dr', 'Ap'),
(2,'Par Dr', 'Ap'),
(3, 'Marques', 'TX'),
(4, 'Jaint', 'Tx');

-- Dumping data for table `tbladdress`
INSERT INTO `tbaddress` (`addressid`, `userid`, `streetnumber`, `zipcodeid`) VALUES
(1, 2, '5120',  1),
(2, 5, '3420',  1),
(3, 6, '3425', 2),
(4, 7,  '5648', 3);

-- Dumping Data into 'tbuserAddresses'
INSERT INTO `tbuserAddresses` (`useraddressid`, `userid`, `addressid`) VALUES
(1, 2, '1'),
(2, 5, '1'),
(3, 6,  '2'),
(4, 7,  '3');

-- Dumping data for table `tblcategory`
INSERT INTO `tblcategory` (`categoryid`, `categoryname`, `adminid`) VALUES
(1, 'Food',1),
(2, 'Fashion',1),
(3, 'Technology',2),
(4, 'Grooming',2);

-- Dumping data for table `tblsubcategory`
INSERT INTO `tblsubcategory` (`subcatid`, `subcatname`, `categoryid`) VALUES
(1, 'Animation ', 3),
(4, 'Baking', 1),
(7, 'Indian', 1),
(13, 'American-Food', 1);

-- Dumping data for table `tblarticle`
INSERT INTO `tblarticle` (`articleid`, `articletitle`, `description`, `featuredimage`, `createdt`, `subcatid`, `views`) VALUES
(4, 'Beauty Of Turkey', 'Turkey, the land of hot air balloons, surrounded by mountains and mesmerizing sunset', 'travel3.jpg', '2022-03-14', 1, 20),
(7, 'Italian based Cuisine', 'Pizza', 'food2.jpg', '2022-03-03', 4, 20);

-- Dumping data for table `tblarticletag`
INSERT INTO `tblarticletag` (`articletagid`, `description`, `articleid`) VALUES
(1, '#premkamal', '4'),
(2, '#keya', '4'),
(3, '#sandy',  '7');

-- Dumping data for table `tbarticleimg`
INSERT INTO `tbarticleimg` (`imageid`, `articleid`, `imagename`, `description`, `imagetype`) VALUES
(1, 4, 'travel3', 'Turkey, the land of hot air balloons', '.jpg'),
(2, 7, 'food2', 'Food plays an impotant role', '.jpg');

-- Dumping data for table `tblcomment`
INSERT INTO `tblcomment` (`commentid`, `userid`, `articleid`, `comment`, `createdat`) VALUES
(8, 5, 4, 'Beautiful Picture', '2020-05-31');

-- Dumping data for table `tblfollow`
INSERT INTO `tblfollow` (`followid`, `userid`, `followerid`) VALUES
(1, 2, 5),
(4, 5, 2),
(5, 6, 5);

-- Dumping Data into 'tbuserArticle'
INSERT INTO `tbuserArticle` (`userarticleid`, `userid`, `articleid`) VALUES
(1, 2, '4'),
(2, 5, '4'),
(3, 6,  '7'),
(4, 7,  '7');

-- Dumping Data into 'tbuserlikeArticle'
INSERT INTO `tbuserlikeArticle` (`userlikearticleid`, `userid`, `articleid`) VALUES
(1, 2, '4'),
(2, 5, '4'),
(3, 6,  '7'),
(4, 7,  '7');

-- Dumping Data into 'tbuseroffer'
INSERT INTO `tbuseroffer` (`userofferid`, `userid`, `offerid`) VALUES
(1, 2, '1'),
(2, 5, '1'),
(3, 6,  '2'),
(4, 7,  '2');

-- Dumping Data for Table 'tbuserComment'
INSERT INTO `tbuserComment` (`usercommentid`, `userid`, `commentid`) VALUES
(1, 2, '8'),
(2, 5, '8'),
(3, 6, '8'),
(4, 7, '8');













