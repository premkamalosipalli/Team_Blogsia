use blogsia_NDb;

-- Table structure for table `tblcompany`

CREATE TABLE `tblcompany` (
  `companyid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `companytitle` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
   primary key (companyid)
);

-- Table structure for table `tbladmin`

CREATE TABLE `tbladmin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `companyid` int(11) NOT NULL,
   primary key (adminid),
   foreign key (companyid) references tblcompany(companyid)
);

-- Table structure for table `tbluser`
CREATE TABLE `tbluser` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `website` varchar(500) DEFAULT NULL,
  `adminid` int(11) NOT NULL,
  primary key (userid),
  foreign key (adminid) references tbladmin(adminid)
);

-- Table structure for table `tblpartnershipoffer`
CREATE TABLE `tblpartnershipoffer` (
  `offerid` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `minfollowers` varchar(10) NOT NULL,
  `maxfollowers` varchar(10) NOT NULL,
  `minprice` int(11) NOT NULL,
  `maxprice` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  primary key (offerid),
  foreign key (companyid) references tblcompany(companyid),
  foreign key (userid) references tbluser(userid)
);

-- Table structure for table `tblpatnershipresponse`
CREATE TABLE `tblpatnershipresponse` (
  `responseid` int(11) NOT NULL AUTO_INCREMENT,
  `offerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `totalfollowers` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  primary key (responseid),
  foreign key (offerid) references tblpartnershipoffer(offerid),
  foreign key (userid) references tbluser(userid)
);

-- Table structure for table `tbsocialacc`
CREATE TABLE `tbsocialacc` (
  `socialid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `ytlink` varchar(500) DEFAULT NULL,
  `fblink` varchar(500) DEFAULT NULL,
  `instalink` varchar(500) DEFAULT NULL,
  `linkedinlink` varchar(500) DEFAULT NULL,
  `profilepic` varchar(100) NOT NULL,
  `bio` varchar(500) NOT NULL,
  primary key (socialid),
  foreign key(userid) references tbluser(userid)
);

-- Table structure for table 'tbzipcode'
CREATE TABLE `tbzipcode` (
  `zipcodeid` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  primary key (zipcodeid)
);

-- Table structure for table `tbaddress`
CREATE TABLE `tbaddress` (
  `addressid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `streetnumber` varchar(500) DEFAULT NULL,
  `zipcodeid` int(11) NOT NULL,
  primary key (addressid),
  foreign key (userid) references tbluser(userid),
  foreign key (zipcodeid) references tbzipcode(zipcodeid)
);

-- Table structure for tabel 'tbuserAddresses'
CREATE TABLE `tbuserAddresses` (
  `useraddressid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `addressid` int(11) NOT NULL,
  primary key (useraddressid),
  foreign key (userid) references tbluser(userid),
  foreign key (addressid) references tbaddress(addressid)
);

-- Table structure for table `tblcategory`
CREATE TABLE `tblcategory` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(50) NOT NULL,
  `adminid` int(11) NOT NULL,
  primary key (categoryid),
  foreign key (adminid) references tbladmin(adminid)
);

-- Table structure for table `tblsubcategory`
CREATE TABLE `tblsubcategory` (
  `subcatid` int(11) NOT NULL AUTO_INCREMENT,
  `subcatname` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  primary key (subcatid),
  foreign key (categoryid) references tblcategory(categoryid)
);

-- Table structure for table `tblarticle`
CREATE TABLE `tblarticle` (
  `articleid` int(11) NOT NULL AUTO_INCREMENT,
  `articletitle` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `featuredimage` varchar(100) NOT NULL,
  `createdt` date NOT NULL,
  `subcatid` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  primary key (articleid),
  foreign key (subcatid) references tblsubcategory(subcatid)
);

-- Table structure for table `tblarticletag`
CREATE TABLE `tblarticletag` (
  `articletagid` int(11) NOT NULL  AUTO_INCREMENT,
  `description` varchar(1000) NOT NULL,
  `articleid` int(11) NOT NULL,
  primary key (articletagid),
  foreign key (articleid) references tblarticle(articleid)
);

-- Table structure for table `tbarticleimg`
CREATE TABLE `tbarticleimg` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `articleid` int(11) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `imagetype` varchar(50) NOT NULL,
  primary key (imageid),
  foreign key (articleid) references tblarticle(articleid)
);

-- Table structure for table `tblcomment`
CREATE TABLE `tblcomment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `createdat` date NOT NULL,
  primary key (commentid),
  foreign key (articleid) references tblarticle(articleid),
  foreign key (userid) references tbluser(userid)
);

-- Table structure for table `tblfollow`
CREATE TABLE `tblfollow` (
  `followid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `followerid` int(11) NOT NULL,
  primary key (followid),
  foreign key (userid) references tbluser(userid)
);

-- Table structure for tabel 'tbuserArticle'
CREATE TABLE `tbuserArticle` (
  `userarticleid` int(11) NOT NULL  AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  primary key (userarticleid),
  foreign key (userid) references tbluser(userid),
  foreign key (articleid) references tblarticle(articleid)
);

-- Table structure for tabel 'tbuserLikeArticle'
CREATE TABLE `tbuserLikeArticle` (
  `userlikearticleid` int(11) NOT NULL  AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  primary key (userlikearticleid),
  foreign key (userid) references tbluser(userid),
  foreign key (articleid) references tblarticle(articleid)
);

-- Table structure for tabel 'tbuseroffer'
CREATE TABLE `tbuseroffer` (
  `userofferid` int(11) NOT NULL  AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `offerid` int(11) NOT NULL,
  primary key (userofferid),
  foreign key (userid) references tbluser(userid),
  foreign key (offerid) references tblpartnershipoffer(offerid)
);

-- Table structure for tabel 'tbusercomment'
CREATE TABLE `tbusercomment` (
  `usercommentid` int(11) NOT NULL  AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  primary key (usercommentid),
  foreign key (userid) references tbluser(userid),
  foreign key (commentid) references tblcomment(commentid)
);










