-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 07:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms_lady_gamble_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `content`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'YIXTKJICGU.png', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'https://www.coca-colacompany.com', '2021-05-28 05:48:06', '2021-07-22 19:13:29', '2021-07-22 19:13:29'),
(2, 'F6W4qgqbRF.png', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'https://en.cdprojektred.com/', '2021-05-28 05:48:28', '2021-05-28 05:48:28', NULL),
(3, 'ssA8ExmoVu.png', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'https://wizardsports.com/', '2021-05-28 05:49:09', '2021-05-28 05:49:09', NULL),
(4, 'rY4pDCY3cI.jpg', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'coke.com', '2021-05-28 05:49:21', '2021-05-28 05:49:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `page`, `title`, `description`, `image`, `deleted_at`) VALUES
(1, '2021-05-28 05:37:31', '2022-06-22 09:24:06', 'home_step_1', 'SIGN UP THROUGH CHAT BOX.', NULL, 'FmkHIRbNhX.svg', '2022-06-22 09:24:06'),
(2, '2021-05-28 05:38:33', '2022-06-22 09:24:11', 'home_step_2', 'GET YOUR ACCOUNT.', NULL, 'Cr8SUodnXK.svg', '2022-06-22 09:24:11'),
(3, '2021-05-28 05:42:46', '2022-06-22 09:25:05', 'home_step_3', 'BUY YOUR COINS FROM US.', NULL, 'YSoubgmE5c.png', '2022-06-22 09:25:05'),
(4, '2021-05-28 05:58:46', '2022-06-22 09:25:10', 'home_step_4', 'PLAY AND WIN .', NULL, 'lCqkoXRFAX.png', '2022-06-22 09:25:10'),
(5, '2021-07-26 14:21:05', '2022-06-22 09:24:14', 'home_step_5', 'REDEEM YOUR WINNINGS.', NULL, '69En7S8pdZ.png', '2022-06-22 09:24:14'),
(6, '2021-07-26 14:21:13', '2022-08-17 07:53:41', 'About Us', NULL, '<p>Welcome to Ms Lady Gamble&#39;s Players Club! Ms Lady Gamble is a credit servicer for the Riversweeps gaming platform.&nbsp; Riversweeps provides safe, reliable, fun, and easy access to all of the best online sweepstakes games.&nbsp; The Riversweeps gaming platform offers more than 70 games able to be played on mobile, tablet, and desktop.&nbsp;</p>\r\n\r\n<p>Ms Lady Gmable provides cashiers to assist with new accounts, deposit/redeem requests, and to answer questions to ensure the highest quality gaming experience available online.</p>\r\n\r\n<p>Our goal is, was, and always will be to address player requests in a timely and friendly manner so you can get back to playing and winning.</p>\r\n\r\n<p>As always, remember to&nbsp;<em><strong>play at your own risk</strong></em>.&nbsp; If you feel you have a gambling problem the National Problem Gambling Helpline (1-800-522-4700) is available 24/7 and is 100% confidential. This hotline connects callers to local health and government organizations that can assist with their gambling addiction.</p>\r\n\r\n<p><strong>DISCLAIMER FOR END USERS</strong></p>\r\n\r\n<p>Riverslot software company (recognized as Riversweeps in colloquial use) provides sweepstakes promotional games to physical stores creating incentives for their customers to win prizes in return for in-store purchase. Riverslot company is not affiliated with websites, Facebook pages, social media accounts, and individuals plagiarizing our brand name and/or claiming to provide Riversweeps games online. Riverslot policy prohibits and does not under any circumstances endorse the use of our software and brand name online. Please beware of fake websites and pages as imposters misleading users into sending payments.</p>\r\n\r\n<p>Authentic Riverslot websites are:</p>\r\n\r\n<ol>\r\n	<li><a href=\"http://riverslot.net/\" target=\"_blank\">riverslot.net</a></li>\r\n	<li><a href=\"http://riverslot.net/\" target=\"_blank\">youtube.com/RiverSlot</a></li>\r\n	<li><a href=\"http://facebook.com/RiverSweepstakes\" target=\"_blank\">facebook.com/RiverSweepstakes</a></li>\r\n	<li><a href=\"http://playriverslot.com/\" target=\"_blank\">playriverslot.com</a></li>\r\n	<li><a href=\"http://river777.com/\" target=\"_blank\">river777.com</a></li>\r\n	<li><a href=\"http://bet777.eu/\" target=\"_blank\">bet777.eu</a></li>\r\n</ol>\r\n\r\n<p>If you have any complaints or inquiries in respect of our services, you may contact us at&nbsp;<a href=\"mailto:info@riverslot.net\" target=\"_blank\">info@riverslot.net</a></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL),
(7, '2021-07-26 14:21:08', '2022-06-29 10:49:01', 'Policy', NULL, '<ol>\r\n	<li><strong>Introduction</strong>.\r\n	<ol>\r\n		<li><strong>Website Owner</strong>. TO BE OR NOT TO BE MARKETING LLC (&quot;<strong>Company,</strong>&quot; &quot;<strong>we,</strong>&quot; or &quot;<strong>us</strong>&quot;) is the owner of&nbsp;<a href=\"http://www.msladygamble.com\" target=\"_blank\">www.msladygamble.com</a><a href=\"http://www.kingofpalmsgaming.com/\" target=\"_blank\"> </a>(the &quot;<strong>Website</strong>&quot;). We can be contacted by mail at by e-mail at&nbsp;<a href=\"mailto:info@sightandsoundcfl.com\" target=\"_blank\">info@msladygamble.com</a> This online privacy notice discloses the information practices for this website, including what type of personally identifiable information is requested in order to make a purchase, and how the information is used, and with whom the information is shared.</li>\r\n		<li><strong>Website Visits</strong>. In general, you can visit this Website without disclosing any personal information. We do not keep track of the domains from which people visit our website.</li>\r\n		<li><strong>Website Transactions</strong>. At times, Company will need personal information regarding a customer or a prospect. For example, to process an order or provide a subscription, Company may need to know a customer&#39;s name, mailing address, e-mail address, and credit card details. It is Company&rsquo;s intent to inform you before Company collects personal information, such as the user&#39;s name and/or address on the Internet. If you tell us that you do not wish to have this information used as a basis for further contact with you, Company will respect your wishes.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Personal Information That May Is Collected</strong>.\r\n	<ol>\r\n		<li><strong>Identifying Information</strong>. In order to make a purchase, we will request a user to provide certain personally-identifying information, which may include legal name, postal address, e-mail address, screen name, password, telephone number, facsimile number, method of payment, and, if applicable, credit card number. We may request additional information necessary to establish and maintain the customer&#39;s account.</li>\r\n		<li><strong>Information from Children</strong>. We do not collect or maintain information from users actually known to be under the age of 18, and no part of this website is structured to attract anyone under the age of 18.</li>\r\n		<li><strong>Lost or Stolen Information</strong>. Help keep your personal information accurate. If a customer&#39;s personal information has changed, please e-mail the new information to us at the e-mail address shown in Paragraph 1(a). If a customer would like to review the personal information e-mail your request to <a href=\"mailto:info@sightandsoundcfl.com\" target=\"_blank\">info@sightandsoundcfl.com</a> together with the description of the recent purchase.</li>\r\n		<li><strong>Links to Other Websites</strong>. Our website may contain links to other websites. We are not responsible for the privacy practices or the content of those other websites.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Uses Made of the Information</strong>.\r\n	<ol>\r\n		<li><strong>Limited Uses Identified</strong>. Without the customer&#39;s prior consent, we will not use your personally identifiable information for any purpose other than that for which it is submitted. We use personally identifiable information to reply to inquiries, handle complaints, and provide operational notices, and in-program record-keeping. We also process billing and business requests related to our website participation.</li>\r\n		<li><strong>Marketing Uses</strong>. We reserve the right to provide the customer with information about our website, products and services, and related information in which the customer has indicated an interest.</li>\r\n		<li><strong>Stored Information Uses</strong>. We store and retain the information provided by customers. The stored information is used by us and our agents: to support customer interaction with our website; to deliver customer purchases; and/or to contact customers again about other services, products, and promotions.</li>\r\n		<li><strong>Online Advertising</strong>. Some companies that help us deliver interactive online advertising, such as banner ads, may collect and use information about our customers to help us better understand the types of advertising or promotions that are most appealing to our customers. After it is collected the information is aggregated so it is not identifiable to a specific individual.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Disclosure of the Information</strong>.\r\n	<ol>\r\n		<li><strong>Mergers and Acquisitions</strong>. Circumstances may arise where for business reasons, we decide to sell, buy, merge, or otherwise reorganize our businesses in the United States or some other country. Such a transaction may involve the disclosure of personal identifying information to prospective or actual purchasers, and/or receiving such information from sellers. It is our practice to seek appropriate protection for information in these types of transactions.</li>\r\n		<li><strong>Agents</strong>. The company employs or engages other companies and individuals to perform business functions on our behalf. These persons are provided with personal identifying information required to perform their functions but are prohibited by contract from using the information for other purposes. These persons engage in a variety of functions which include, but are not limited to, fulfilling orders, analyzing data, providing marketing assistance, processing credit card payments, and providing customer services.</li>\r\n		<li><strong>Affiliated Businesses</strong>. We work closely with affiliated businesses operating website stores, providing services, or selling products on each other&#39;s Websites. These businesses identify themselves to customers. Customer information related to a transaction with an affiliated business is shared with that affiliated business.</li>\r\n		<li><strong>Marketing Analysis by Third Parties</strong>. We reserve the right to disclose to third parties personal information about customers for marketing analysis; however, any information disclosed will be in the form of aggregate data that does not describe or identify an individual customer.</li>\r\n		<li><strong>Disclosure to Governmental Authorities</strong>. Under certain circumstances, personal information may be subject to disclosure pursuant to judicial or other government subpoenas, warrants, or orders.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Use of Computer Tracking Technologies</strong>.\r\n	<ol>\r\n		<li><strong>No Tracking of Personal Information</strong>. The company&#39;s Website(s) are not set up to track, collect or distribute personal information not entered by visitors. Through website access logs we do not collect clickstream data and HTTP protocol elements, which generate certain kinds of non-identifying site usage data, such as the number of hits and visits to our sites. This information is used for internal purposes by technical support staff for research and development, user analysis, and business decision-making, all of which provide better services to the public. The statistics garnered, which contain no personal information and cannot be used to gather such information, may also be provided to third parties.</li>\r\n		<li><strong>Use of Cookies</strong>. The company, or its third-party vendors, collects non-identifiable and personal information through the use of various technologies, including &quot;cookies.&quot; A cookie is an alphanumeric identifier that a website can transfer to a customer&#39;s hard drive through the customer&#39;s browser. The cookie is then stored on the customer&#39;s computer as an anonymous tag that identifies the customer&#39;s computer, but not the customer. Cookies may be sent by us or our third-party vendors. Customers can set their browser to notify customers before a cookie is received, giving them an opportunity to decide whether to accept the cookie. Customers may also set their browser to turn off cookies; however, some Websites may not then work properly.</li>\r\n		<li><strong>Collection of Personal Information</strong>. We collect personal identifying information from customers during a transaction. We may extract some personally identifying information about that transaction in a non-identifiable format and combine it with other non-identifiable information, such as clickstream data. This information is used and analyzed only at an aggregate level (not at an individual level) to help us understand trends and patterns.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Information Security</strong>.\r\n	<ol>\r\n		<li><strong>Commitment to Online Security</strong>. We intend to protect customers&#39; personal information and maintain its quality. To achieve information security and quality, we implement appropriate measures and processes, such as using encryption when transmitting certain sensitive information.</li>\r\n		<li><strong>No Liability for Acts of Third Parties</strong>. We will exercise all reasonable efforts to safeguard the confidentiality of customer personal information. However, transmissions protected by industry-standard security technology and implemented by human beings cannot be made absolutely secure. Consequently,&nbsp;<strong>we shall not be liable for unauthorized disclosure of personal information</strong>.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Privacy Policy Changes and Opt-Out Rights</strong>.\r\n	<ol>\r\n		<li><strong>Changes to Privacy Policy</strong>. This privacy notice was last updated on November 3, 2021. We reserve the right to change this privacy policy statement at any time.</li>\r\n		<li><strong>Opt-Out Right</strong>. The customer has the right at any time to cease permitting personal information to be collected, used, or disclosed by us and/or by any third parties with whom we have shared and/or transferred personal information. Right of cancellation may be exercised by contacting us via e-mail at info@msladygamble, telephone, or certified postal mail. After processing the cancellation, we will delete the customer or prospective customer&#39;s personal information from our database.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Access Rights to Data</strong>.\r\n	<ol>\r\n		<li><strong>Information Maintained</strong>. Upon the customer&#39;s request, we will provide a reasonable description of the customer&#39;s personally identifiable information that we maintain in our data bank. We can be contacted by email at <a href=\"mailto:info@msladygamble.com\" target=\"_blank\">info@msladygamble.com</a></li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Accountability</strong>.\r\n	<ol>\r\n		<li><strong>Questions, Problems, and Complaints</strong>. If you have a question about this policy statement or a complaint about our compliance with this privacy policy, you may contact us by e-mail at <a href=\"mailto:info@msladygamble.com\" target=\"_blank\">info@msladygamble.com</a>.</li>\r\n		<li><strong>Terms of Use</strong>. If a customer chooses to enter into a purchase order, the customer&#39;s action is hereby deemed acceptance of our practices described in this policy statement. Any dispute over privacy is subject to the provisions of this notice and to our Terms of Use Agreement, which is incorporated herein.</li>\r\n	</ol>\r\n	</li>\r\n</ol>', NULL, NULL),
(8, '2021-07-26 14:21:11', '2022-09-16 22:13:54', 'Term & condtion', NULL, '<p><strong>Terms of Use</strong></p>\r\n\r\n<p><strong>Acceptance of the Terms of Use</strong></p>\r\n\r\n<p>These terms of use are entered into by and between You and TO BE OR NOT TO BE MARKETING LLC (&quot;<strong>Company,</strong>&quot; &quot;<strong>we,</strong>&quot; or &quot;<strong>us</strong>&quot;). The following terms and conditions, together with any documents they expressly incorporate by reference (collectively, &quot;<strong>Terms of Use</strong>&quot;), govern your access to and use of <a href=\"http://www.msladygamble.com\" target=\"_blank\">www.msladygamble.com</a>, including any content, functionality and services offered on or through <a href=\"http://www.msladygamble.com\" target=\"_blank\">www.msladygamble.com</a> (the &quot;<strong>Website</strong>&quot;), whether as a guest or a registered user.</p>\r\n\r\n<p>Please read the Terms of Use carefully before you start to use the Website.&nbsp;<strong>By using the Website or by clicking to accept or agree to the Terms of Use when this option is made available to you, you accept and agree to be bound and abide by these Terms of Use and our Privacy Policy, incorporated herein by reference.</strong>&nbsp;If you do not want to agree to these Terms of Use or the Privacy Policy, you must not access or use the Website.</p>\r\n\r\n<p>This Website is offered and available to users who are 18 years of age or older. By using this Website, you represent and warrant that you are of legal age to form a binding contract with the Company and meet all of the foregoing eligibility requirements. If you do not meet all of these requirements, you must not access or use the Website.</p>\r\n\r\n<p><strong>Changes to the Terms of Use</strong></p>\r\n\r\n<p>We may revise and update these Terms of Use from time to time in our sole discretion. All changes are effective immediately when we post them and apply to all access to and use of the Website thereafter. However, any changes to the dispute resolution provisions set forth in Governing Law and Jurisdiction will not apply to any disputes for which the parties have actual notice prior to the date the change is posted on the Website.</p>\r\n\r\n<p>Your continued use of the Website following the posting of revised Terms of Use means that you accept and agree to the changes. You are expected to check this page frequently, so you are aware of any changes, as they are binding on you.</p>\r\n\r\n<p><strong>Accessing the Website and Account Security</strong></p>\r\n\r\n<p>We reserve the right to withdraw or amend this Website, and any service or material we provide on the Website, in our sole discretion without notice. We will not be liable if for any reason all or any part of the Website is unavailable at any time or for any period. From time to time, we may restrict access to some parts of the Website, or the entire website, to users, including registered users.</p>\r\n\r\n<p>You are responsible for both:</p>\r\n\r\n<ul>\r\n	<li>Making all arrangements necessary for you to have access to the Website.</li>\r\n	<li>Ensuring that all persons who access the Website through your internet connection are aware of these Terms of Use and comply with them.</li>\r\n</ul>\r\n\r\n<p>To access the Website or some of the resources it offers, you may be asked to provide certain registration details or other information. It is a condition of your use of the Website that all the information you provide on the Website is correct, current and complete. You agree that all information you provide to register with this Website or otherwise, including, but not limited to, through the use of any interactive features on the Website, and you consent to all actions we take with respect to your information consistent with our Privacy Policy.</p>\r\n\r\n<p>If you choose, or are provided with, a username, password or any other piece of information as part of our security procedures, you must treat such information as confidential, and you must not disclose it to any other person or entity. You also acknowledge that your account is personal to you and agree not to provide any other person with access to this Website or portions of it using your username, password or other security information. You agree to notify us immediately of any unauthorized access to or use of your username or password or any other breach of security. You also agree to ensure that you exit from your account at the end of each session. You should use particular caution when accessing your account from a public or shared computer so that others are not able to view or record your password or other personal information.</p>\r\n\r\n<p>We have the right to disable any username, password or other identifier, whether chosen by you or provided by us, at any time in our sole discretion for any or no reason, including if, in our opinion, you have violated any provision of these Terms of Use.</p>\r\n\r\n<p><strong>Intellectual Property Rights</strong></p>\r\n\r\n<p>The Website and its entire contents, features and functionality (including but not limited to all information, software, text, displays, images, video and audio, and the design, selection and arrangement thereof), are owned by the Company, its licensors or other providers of such material and are protected by United States and international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.</p>\r\n\r\n<p>These Terms of Use permit you to use the Website for your personal, non-commercial use only. You must not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store or transmit any of the material on our Website, except as follows:</p>\r\n\r\n<ul>\r\n	<li>Your computer may temporarily store copies of such materials in RAM incidental to your accessing and viewing those materials.</li>\r\n	<li>You may store files that are automatically cached by your Web browser for display enhancement purposes.</li>\r\n	<li>You may print one copy of a reasonable number of pages of the Website for your own personal, non-commercial use and not for further reproduction, publication or distribution.</li>\r\n</ul>\r\n\r\n<p>You must not:</p>\r\n\r\n<ul>\r\n	<li>Modify copies of any materials from this site.</li>\r\n	<li>Use any illustrations, photographs, video or audio sequences or any graphics separately from the accompanying text.</li>\r\n	<li>Delete or alter any copyright, trademark or other proprietary rights notices from copies of materials from this site.</li>\r\n</ul>\r\n\r\n<p>You must not access or use for any commercial purposes any part of the Website or any services or materials available through the Website.</p>\r\n\r\n<p>If you wish to make any use of material on the Website other than that set out in this section, please address your request to: <a href=\"mailto:info@msladygamble.com\" target=\"_blank\">info@msladygamble.com</a></p>\r\n\r\n<p>If you print, copy, modify, download or otherwise use or provide any other person with access to any part of the Website in breach of the Terms of Use, your right to use the Website will cease immediately and you must, at our option, return or destroy any copies of the materials you have made. No right, title or interest in or to the Website or any content on the Website is transferred to you, and all rights not expressly granted are reserved by the Company. Any use of the Website not expressly permitted by these Terms of Use is a breach of these Terms of Use and may violate copyright, trademark and other laws.</p>\r\n\r\n<p><strong>Trademarks</strong></p>\r\n\r\n<p>The Company name, logo and all related names, product and service names, designs and slogans are trademarks of the Company or its affiliates or licensors. You must not use such marks without the prior written permission of the Company. All other names, logos, product and service names, designs and slogans on this Website are the trademarks of their respective owners.</p>\r\n\r\n<p><strong>Prohibited Uses</strong></p>\r\n\r\n<p>You may use the Website only for lawful purposes and in accordance with these Terms of Use. You agree not to use the Website:</p>\r\n\r\n<ul>\r\n	<li>In any way that violates any applicable federal, state, local or international law or regulation (including, without limitation, any laws regarding the export of data or software to and from the US or other countries).</li>\r\n	<li>For the purpose of exploiting, harming or attempting to exploit or harm minors in any way by exposing them to inappropriate content, asking for personally identifiable information or otherwise.</li>\r\n	<li>To impersonate or attempt to impersonate the Company, a Company employee, another user or any other person or entity (including, without limitation, by using e-mail addresses or screen names associated with any of the foregoing).</li>\r\n	<li>To engage in any other conduct that restricts or inhibits anyone&#39;s use or enjoyment of the Website, or which, as determined by us, may harm the Company or users of the Website, or expose them to liability.</li>\r\n</ul>\r\n\r\n<p>Additionally, you agree not to:</p>\r\n\r\n<ul>\r\n	<li>Use the Website in any manner that could disable, overburden, damage, or impair the site or interfere with any other party&#39;s use of the Website, including their ability to engage in real time activities through the Website.</li>\r\n	<li>Use any robot, spider or other automatic device, process or means to access the Website for any purpose, including monitoring or copying any of the material on the Website.</li>\r\n	<li>Use any manual process to monitor or copy any of the material on the Website, or for any other purpose not expressly authorized in these Terms of Use, without our prior written consent.</li>\r\n	<li>Use any device, software or routine that interferes with the proper working of the Website.</li>\r\n	<li>Introduce any viruses, trojan horses, worms, logic bombs or other material which is malicious or technologically harmful.</li>\r\n	<li>Attempt to gain unauthorized access to, interfere with, damage or disrupt any parts of the Website, the server on which the Website is stored, or any server, computer or database connected to the Website.</li>\r\n	<li>Attack the Website via a denial-of-service attack or a distributed denial-of-service attack.</li>\r\n	<li>Otherwise attempt to interfere with the proper working of the Website.</li>\r\n</ul>\r\n\r\n<p><strong>Reliance on Information Posted</strong></p>\r\n\r\n<p>The information presented on or through the Website is made available solely for general information purposes. We do not warrant the accuracy, completeness or usefulness of this information. Any reliance you place on such information is strictly at your own risk. We disclaim all liability and responsibility arising from any reliance placed on such materials by you or any other visitor to the Website, or by anyone who may be informed of any of its contents.</p>\r\n\r\n<p>This Website may include content provided by third parties, including materials provided by other users, bloggers and third-party licensors, syndicators, aggregators and/or reporting services. All statements and/or opinions expressed in these materials, and all articles and responses to questions and other content, other than the content provided by the Company, are solely the opinions and the responsibility of the person or entity providing those materials. These materials do not necessarily reflect the opinion of the Company. We are not responsible, or liable to you or any third party, for the content or accuracy of any materials provided by any third parties.</p>\r\n\r\n<p><strong>Changes to the Website</strong></p>\r\n\r\n<p>We may update the content on this Website from time to time, but its content is not necessarily complete or up-to-date. Any of the material on the Website may be out of date at any given time, and we are under no obligation to update such material.</p>\r\n\r\n<p><strong>Information About You and Your Visits to the Website</strong></p>\r\n\r\n<p>All information we collect on this Website is subject to our Privacy Policy By using the Website, you consent to all actions taken by us with respect to your information in compliance with the Privacy Policy.</p>\r\n\r\n<p><strong>Online Purchases and Other Terms and Conditions</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Payment Medium you use to purchase Credits must be legally and beneficially owned by you and in your name. If it comes to our attention that the name you registered on your Customer Account and the name linked to your Payment Medium differ, your Customer Account will be immediately suspended. Should your Customer Account be suspended, we recommend that you contact Customer Support via email at <a href=\"mailto:info@sightandsoundcfl.com\" target=\"_blank\">info@sightandsoundcfl.com</a>.</p>\r\n\r\n<p>We reserve the right to request documents and information to verify the legal and beneficial ownership of the Payment Medium you use to make credit purchases.</p>\r\n\r\n<p>You agree that we and/or our Payment Administration Agents and payments facilitators may store&nbsp;your payment information (e.g. card number) to process your future purchases. By accepting these&nbsp;Terms and Conditions, you authorize Sight and Sound of Central Florida and/or our Payment Administration Agents and payments facilitators to store your payment credentials in compliance with applicable payment processing regulations.</p>\r\n\r\n<p><strong>Prize Redemption</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Customers can redeem credits for prizes through our website by clicking the &ldquo;Redeem&rdquo; button. All redemptions must be requested utilizing the form provided on our website. Customers may redeem credits in the following method:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bitcoin Redemptions: Customers may request redemption of any prizes provided on our website. When players redeem credits for bitcoin, such prizes will be allocated to the bitcoin wallet address provided in the player&rsquo;s customer account. Redemption amounts may vary depending on the prize(s) selected and amounts are subject to change at our sole discretion.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Redemption Restrictions: Redemptions are limited to a maximum of 300 credits per day &ndash; each new day will begin at 12:00 a.m. Eastern Standard Time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Linking to the Website and Social Media Features</strong></p>\r\n\r\n<p>You may link to our homepage, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it, but you must not establish a link in such a way as to suggest any form of association, approval or endorsement on our part without our express written consent.</p>\r\n\r\n<p><strong>Links from the Website</strong></p>\r\n\r\n<p>IF THE WEBSITE CONTAINS LINKS TO OTHER SITES AND RESOURCES PROVIDED BY THIRD PARTIES, THESE LINKS ARE PROVIDED FOR YOUR CONVENIENCE ONLY. THIS INCLUDES LINKS CONTAINED IN ADVERTISEMENTS, INCLUDING BANNER ADVERTISEMENTS AND SPONSORED LINKS. WE HAVE NO CONTROL OVER THE CONTENTS OF THOSE SITES OR RESOURCES AND ACCEPT NO RESPONSIBILITY FOR THEM OR FOR ANY LOSS OR DAMAGE THAT MAY ARISE FROM YOUR USE OF THEM. IF YOU DECIDE TO ACCESS ANY OF THE THIRD-PARTY WEBSITES LINKED TO THIS WEBSITE, YOU DO SO ENTIRELY AT YOUR OWN RISK AND SUBJECT TO THE TERMS AND CONDITIONS OF USE FOR SUCH WEBSITES.</p>\r\n\r\n<p><strong>Geographic Restrictions</strong></p>\r\n\r\n<p>THE OWNER OF THE WEBSITE IS BASED IN THE STATE OF <strong>NORTH CAROLINA </strong>IN THE UNITED STATES. WE MAKE NO CLAIMS THAT THE WEBSITE OR ANY OF ITS CONTENT IS ACCESSIBLE OR APPROPRIATE INSIDE OR OUTSIDE OF THE UNITED STATES. ACCESS TO THE WEBSITE MAY NOT BE LEGAL BY CERTAIN PERSONS OR IN CERTAIN STATES OR COUNTRIES. IF YOU ACCESS THE WEBSITE YOU DO SO ON YOUR OWN INITIATIVE AND ARE RESPONSIBLE FOR COMPLIANCE WITH LOCAL LAWS.</p>\r\n\r\n<p><strong>Disclaimer of Warranties</strong></p>\r\n\r\n<p>You understand that we cannot and do not guarantee or warrant that files available for downloading from the internet or the Website will be free of viruses or other destructive code. You are responsible for implementing sufficient procedures and checkpoints to satisfy your particular requirements for anti-virus protection and accuracy of data input and output, and for maintaining a means external to our site for any reconstruction of any lost data. WE WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE CAUSED BY A DISTRIBUTED DENIAL-OF-SERVICE ATTACK, VIRUSES, OR OTHER TECHNOLOGICALLY HARMFUL MATERIAL THAT MAY INFECT YOUR COMPUTER EQUIPMENT, COMPUTER PROGRAMS, DATA, OR OTHER PROPRIETARY MATERIAL DUE TO YOUR USE OF THE WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR TO YOUR DOWNLOADING OF ANY MATERIAL POSTED ON IT, OR ON ANY WEBSITE LINKED TO IT.</p>\r\n\r\n<p>YOUR USE OF THE WEBSITE, ITS CONTENT, AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE IS AT YOUR OWN RISK. THE WEBSITE, ITS CONTENT, AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE ARE PROVIDED ON AN &quot;AS IS&quot; AND &quot;AS AVAILABLE&quot; BASIS, WITHOUT ANY WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. NEITHER THE COMPANY NOR ANY PERSON ASSOCIATED WITH THE COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY OR AVAILABILITY OF THE WEBSITE. WITHOUT LIMITING THE FOREGOING, NEITHER THE COMPANY NOR ANYONE ASSOCIATED WITH THE COMPANY REPRESENTS OR WARRANTS THAT THE WEBSITE, ITS CONTENT, OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE WILL BE ACCURATE, RELIABLE, ERROR-FREE OR UNINTERRUPTED, AND THAT DEFECTS WILL BE CORRECTED, THAT OUR SITE OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.</p>\r\n\r\n<p>THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR A PARTICULAR PURPOSE.</p>\r\n\r\n<p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>\r\n\r\n<p><strong>Limitation on Liability</strong></p>\r\n\r\n<p>TO THE FULLEST EXTENT PROVIDED BY LAW, IN NO EVENT WILL THE COMPANY, ITS AFFILIATES OR THEIR LICENSORS, SERVICE PROVIDERS, EMPLOYEES, AGENTS, OFFICERS, OR DIRECTORS BE LIABLE FOR DAMAGES OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN CONNECTION WITH YOUR USE, OR INABILITY TO USE, THE WEBSITE, ANY WEBSITES LINKED TO IT, ANY CONTENT ON THE WEBSITE OR SUCH OTHER WEBSITES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR SUCH OTHER WEBSITES, INCLUDING ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO, PERSONAL INJURY, PAIN AND SUFFERING, EMOTIONAL DISTRESS, LOSS OF REVENUE, LOSS OF PROFITS, LOSS OF BUSINESS OR ANTICIPATED SAVINGS, LOSS OF USE, LOSS OF GOODWILL, LOSS OF DATA, AND WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF CONTRACT OR OTHERWISE, EVEN IF FORESEEABLE.</p>\r\n\r\n<p>THE FOREGOING DOES NOT AFFECT ANY LIABILITY WHICH CAN NOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>\r\n\r\n<p><strong>Indemnification</strong></p>\r\n\r\n<p>You agree to defend, indemnify and hold harmless the Company, its affiliates, licensors and service providers, and its and their respective officers, directors, employees, contractors, agents, licensors, suppliers, successors and assigns from and against any claims, liabilities, damages, judgments, awards, losses, costs, expenses or fees (including reasonable attorneys&#39; fees) arising out of or relating to your violation of these Terms of Use or your use of the Website, including, but not limited to, your User Contributions, any use of the Website&#39;s content, services and products other than as expressly authorized in these Terms of Use, or your use of any information obtained from the Website.</p>\r\n\r\n<p><strong>Governing Law and Jurisdiction</strong></p>\r\n\r\n<p>All matters relating to the Website and these Terms of Use, and any dispute or claim arising therefrom or related thereto (in each case, including non-contractual disputes or claims), shall be governed by and construed in accordance with the internal laws of the State of North Carolina without giving effect to any choice or conflict of law provision or rule (whether of the State of Florida or any other jurisdiction).</p>\r\n\r\n<p>Any legal suit, action, or proceeding arising out of, or related to, these Terms of Use or the Website shall be instituted exclusively in the federal courts of the United States or the courts of the State of North Carolina although we retain the right to bring any suit, action or proceeding against you for breach of these Terms of Use in your country of residence or any other relevant country. You waive any and all objections to the exercise of jurisdiction over you by such courts and to the venue in such courts.</p>\r\n\r\n<p><strong>Arbitration</strong></p>\r\n\r\n<p>At Company&#39;s sole discretion, it may require You to submit any disputes arising from these Terms of Use or use of the Website, including disputes arising from or concerning their interpretation, violation, invalidity, non-performance, or termination, to final and binding arbitration under the Rules of Arbitration of the American Arbitration Association applying North Carolina law.</p>\r\n\r\n<p><strong>Limitation on Time to File Claims</strong></p>\r\n\r\n<p>ANY CAUSE OF ACTION OR CLAIM YOU MAY HAVE ARISING OUT OF OR RELATING TO THESE TERMS OF USE OR THE WEBSITE MUST BE COMMENCED WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES; OTHERWISE, SUCH CAUSE OF ACTION OR CLAIM IS PERMANENTLY BARRED.</p>\r\n\r\n<p><strong>Waiver and Severability</strong></p>\r\n\r\n<p>No waiver of by the Company of any term or condition set forth in these Terms of Use shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of the Company to assert a right or provision under these Terms of Use shall not constitute a waiver of such right or provision.</p>\r\n\r\n<p>If any provision of these Terms of Use is held by a court or other tribunal of competent jurisdiction to be invalid, illegal, or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of the Terms of Use will continue in full force and effect.</p>\r\n\r\n<p><strong>Entire Agreement</strong></p>\r\n\r\n<p>The Terms of Use, our Privacy Policy, and Terms of Sale constitute the sole and entire agreement between you and TO BE OR NOT TO BE MARKETING LLC&nbsp; with respect to the Website and supersede all prior and contemporaneous understandings, agreements, representations and warranties, both written and oral, with respect to the Website.</p>\r\n\r\n<p><strong>Your Comments and Concerns</strong></p>\r\n\r\n<p>This website is operated by TO BE OR NOT TO BE MARKETING LLC&nbsp;</p>\r\n\r\n<p>All feedback, comments, requests for technical support, and other communications relating to the Website should be directed to: <a href=\"mailto:info@msladygamble.com\" target=\"_blank\">info@msladygamble.com</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DISCLAIMER</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Welcome to Ms. Lady Gamble&rsquo;s Players Club!&nbsp; Ms. Lady Gamble is a credit servicer for the Riversweeps gaming platform. River sweeps provides safe, reliable, fun, and easy access to all of the best online sweepstakes games.&nbsp;The Riversweeps gaming platform offers more than 70 games able to be played on mobile, tablet, and desktop.&nbsp;We hope to bring more platforms for our players soon!</p>\r\n\r\n<p>Ms. Lady Gamble offers friendly cashiers to assist with new accounts, deposit/redeem requests, and to answer questions to ensure the highest quality gaming experience available online.</p>\r\n\r\n<p>Our goal is and always will be to address player requests in a timely and friendly manner so you can get back to playing and winning.</p>\r\n\r\n<p>As always, remember to&nbsp;<strong><em>play at your own risk</em></strong>.&nbsp; If you feel you have a gambling problem the National Problem Gambling Helpline (1-800-522-4700) is available 24/7 and is 100% confidential. This hotline connects callers to local health and government organizations that can assist with their gambling addiction.</p>\r\n\r\n<p><strong>DISCLAIMER FOR END-USERS</strong></p>\r\n\r\n<p>River slot software company (recognized as Riversweeps in colloquial use) provides sweepstakes promotional games to physical stores creating incentives for their customers to win prizes in return for in-store purchases. River slot company is not affiliated with websites, Facebook pages, social media accounts, and individuals plagiarizing our brand name and/or claiming to provide Riversweeps games online. River slot policy prohibits and does not under any circumstances endorse the use of our software and brand name online. Please beware of fake websites and pages as imposters misleading users into sending payments.</p>\r\n\r\n<p>Authentic Riverslot websites are:</p>\r\n\r\n<ol>\r\n	<li><a href=\"http://riverslot.net/\" target=\"_blank\">riverslot.net</a></li>\r\n	<li><a href=\"http://riverslot.net/\" target=\"_blank\">youtube.com/RiverSlot</a></li>\r\n	<li><a href=\"http://facebook.com/RiverSweepstakes\" target=\"_blank\">facebook.com/RiverSweepstakes</a></li>\r\n	<li><a href=\"http://playriverslot.com/\" target=\"_blank\">playriverslot.com</a></li>\r\n	<li><a href=\"http://river777.com/\" target=\"_blank\">river777.com</a></li>\r\n	<li><a href=\"http://bet777.eu/\" target=\"_blank\">bet777.eu</a></li>\r\n</ol>\r\n\r\n<p>If you have any complaints or inquiries in respect of our services, you may contact us at&nbsp;<a href=\"mailto:info@riverslot.net\" target=\"_blank\">info@riverslot.net</a></p>', NULL, NULL),
(9, '2021-11-07 17:43:27', '2022-09-19 23:05:59', 'ADA Compliance Statement', 'ADA Compliance Statement', '<p>TO BE OR NOT TO BE MARKETING LLC is committed to making all of our web content and services, including electronic and information technology, accessible to everyone. To ensure that we meet or exceed the requirements of Section 504 of the Rehabilitation Act of 1973 and the 1998 Amendment to Section 508 of the Rehabilitation Act of 1973, we continually review our website and services in order to remove accessibility problems for people with disabilities. While TO BE OR NOT TO BE MARKETING&#39;s commitment to accessibility includes making its web content accessible, this is a work in progress. If you have a problem accessing or using any of our websites, please contact our office at&nbsp;<a href=\"mailto:info@msladygamble.com\" target=\"_blank\">info@msladygamble.com</a></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bitcoin_wallet_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`id`, `user_id`, `address`, `zip_code`, `city`, `country`, `contact_no`, `bank_name`, `account_title`, `iban`, `bitcoin_wallet_address`, `created_at`, `updated_at`) VALUES
(2, 20, 'Sed delectus assume', '13785', 'Iure velit et laboru', 'Sint iste quis quis', NULL, 'Robert Pruitt', 'Qui omnis a eiusmod', 'vusarum@mailinator.com', 'Do minim quia cum vo', '2021-10-30 17:49:23', '2021-11-25 12:36:44'),
(3, 28, '3535 Webb chapel ext apt 1125', '75220', 'Dallas', 'U.S.A.', '(318) 535-2488', 'Cash app', 'Checking', 'bc1qzu7qrf7rxke4wq30elg6qpw79a368caah2wqej', 'bc1qzu7qrf7rxke4wq30elg6qpw79a368caah2wqej', '2021-11-23 15:25:27', '2022-10-10 08:34:29'),
(4, 33, 'abc', '11', 'abc', 'abc', '111', NULL, NULL, NULL, '111', '2022-01-29 21:52:16', '2022-01-29 21:55:18'),
(5, 29, 'Quia obcaecati dolor', '91704', 'Ipsum assumenda fug', 'Laborum cupidatat en', 'Amet incididunt non', NULL, NULL, NULL, 'Ullamco quisquam non', '2022-01-29 23:12:12', '2022-01-30 02:11:23'),
(8, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '2022-03-06 17:08:02', '2022-03-06 17:08:02'),
(9, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3AHQN1T9DLiojtx2Lgp4Nm2ag3zf4Lnhb1', '2022-03-09 20:33:27', '2022-03-09 20:33:27'),
(10, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-10 15:59:09', '2022-04-16 12:17:28'),
(11, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-10 16:41:22', '2022-06-19 08:39:45'),
(12, 2, 'test', '21', 'test', 'USA', '(021) 321-3312', 'Brittany Whitehead', '985', '709', '293', '2022-07-02 04:56:17', '2022-08-10 23:19:29'),
(13, 3, 'Vitae at quibusdam d', '59529', 'swat', 'UK', '(343) 434-3434', 'Yuli Levine', '12345678910123', '12345678910123', '531', '2022-08-12 02:23:44', '2022-09-19 23:26:43'),
(14, 4, 'South Dakota is bordered by the states of North Dakota Souhe states of North DakotaSouth Dakota is bordered by the states of North Dakota Souhe states of North Dakota', '64863', 'South Dakota', 'USA', '(162) 661-8970', 'Dakota Bank', 'james', 'AL47 2121 1009 0000 0002 3569 87411', 'BTn NT9101', '2022-08-12 03:09:27', '2022-09-20 23:28:10'),
(15, 6, 'Fugiat aut est dolor', '20541', 'Et temporibus porro', 'In blanditiis fugit', '(127) 416-7892', 'Nola Finley', '67', '613', '983', '2022-08-17 10:18:29', '2022-08-17 10:18:29'),
(16, 5, 'test', '232', 'test', 'test', '(343) 434-3434', 'test', 'test', '343', '234', '2022-08-18 16:47:35', '2022-08-18 16:47:35'),
(17, 7, 'Incidunt earum quib', '88280', 'Ea pariatur Perspic', 'Omnis vero exercitat', '(145) 322-9529', 'Minerva Guy', '890', '454', 'BTC-HL234', '2022-08-18 17:14:24', '2022-08-18 17:14:24'),
(18, 9, 'test', '21', 'test', 'test', '(136) 358-4568', 'Lunea Velez', '104', '733', 'BTC-H686', '2022-08-20 18:56:41', '2022-09-06 20:17:05'),
(19, 10, '570', '716', '973', '425', '399', 'Phyllis Padilla', '227', '341', '180', '2022-08-31 13:52:00', '2022-09-05 18:27:54'),
(20, 11, '155', '258', '241', '737', '978', NULL, NULL, NULL, NULL, '2022-09-05 18:14:59', '2022-09-05 18:14:59'),
(21, 12, 'Quos aute rerum assu', 'opo', '8787', '900', '98776', NULL, NULL, NULL, NULL, '2022-09-07 01:29:55', '2022-09-07 01:29:55'),
(22, 13, 'Nam et aperiam eum f', '62048', 'Laboriosam excepteu', 'In quis quod dolores', '61', NULL, NULL, NULL, NULL, '2022-09-07 01:33:51', '2022-09-07 01:33:51'),
(23, 14, 'test', '21', 'test', 'Pakistan', '(164) 896-3807', 'Gregory Robinson', 'Eaque vel ut anim el', '810', 'Sunt proident prae', '2022-09-08 18:03:16', '2022-09-13 18:53:00'),
(24, 15, 'Ea sint recusandae', '19234', 'Quaerat ut aliqua N', 'Eos perferendis dele', '75', NULL, NULL, NULL, NULL, '2022-09-09 22:29:24', '2022-09-09 22:29:24'),
(25, 17, 'Enim necessitatibus', '53806', 'Perspiciatis volupt', 'Quas pariatur Aut e', '38', NULL, NULL, NULL, NULL, '2022-09-09 22:33:22', '2022-09-09 22:33:22'),
(26, 4, '40 Cedarstone Drive3857 Heliport Loop', '30195', 'dakota', 'USA', '(231) 321-3213', NULL, NULL, NULL, NULL, '2022-09-16 06:18:35', '2022-09-16 06:18:35'),
(27, 7, '2400 Hanna St', '94565', 'PITTSBURG', 'United States', '(628) 333-9223', NULL, NULL, NULL, NULL, '2022-09-17 07:10:59', '2022-09-17 07:10:59'),
(28, 8, 'Mollit explicabo Au', '96655', 'Deserunt tenetur vol', 'Mollit consequat Ha', '(122) 999-2991', NULL, NULL, NULL, NULL, '2022-09-19 23:01:45', '2022-09-19 23:01:45'),
(29, 22, '2525 NORTH PALM DRIVE', '32926', 'Cocoa', 'United States', '(197) 360-0683', NULL, NULL, NULL, NULL, '2022-09-22 10:13:21', '2022-09-22 10:13:21'),
(30, 23, '512 b dudley street', '45107', 'Blanchester', 'United States', '(513) 892-9991', 'Meta', 'Checking', '6358', 'Pennykasey@gmail.com', '2022-09-22 13:25:30', '2022-09-22 13:28:20'),
(31, 24, '711 Harrison st', '94710', 'Berkleey', 'United states', '(408) 813-6441', NULL, NULL, NULL, NULL, '2022-09-24 01:37:40', '2022-09-24 01:37:40'),
(32, 25, '30860 Mead River Ct', '92591', 'Temecula', 'USA', '(619) 789-3542', NULL, NULL, NULL, NULL, '2022-10-06 06:28:55', '2022-10-06 06:28:55'),
(33, 26, '1930 Robin Drive', '95307', 'Ceres', 'USA', '(806) 730-6405', NULL, NULL, NULL, NULL, '2022-10-09 10:07:16', '2022-10-09 10:07:16'),
(34, 27, '1410 west elm st Apt 206', '76374', 'Olney', 'United States', '(940) 882-1192', NULL, NULL, NULL, NULL, '2022-10-10 07:27:31', '2022-10-10 07:27:31'),
(35, 28, '3535 Webb chapel ext apt 1125', '75220', 'Dallas', 'USA', '(318) 535-2488', NULL, NULL, NULL, NULL, '2022-10-10 08:30:04', '2022-10-10 08:30:04'),
(36, 29, '1823 s mooring drive', '34450', 'Inverness', 'United States', '(352) 423-0993', NULL, NULL, NULL, NULL, '2022-10-16 16:27:29', '2022-10-16 16:27:29'),
(37, 30, '777 N Parkway Drive', '93728', 'Fresno', 'USA', '(831) 821-3850', NULL, NULL, NULL, NULL, '2022-10-17 10:56:32', '2022-10-17 10:56:32'),
(38, 31, '113 old york rd, Trailer 16', '17070', 'New Cumberland', 'United States', '(717) 318-7309', NULL, NULL, NULL, NULL, '2022-10-18 05:04:30', '2022-10-18 05:04:30'),
(39, 32, '1459 N. Lompa st', '89706', 'Carson city', 'Usa', '(775) 430-2245', NULL, NULL, NULL, NULL, '2022-10-20 06:56:19', '2022-10-20 06:56:19'),
(40, 33, '2601 The Alameda St', '33233', 'Boynton', 'United States', '(312) 713-1475', NULL, NULL, NULL, NULL, '2022-10-21 22:58:30', '2022-10-21 22:58:30'),
(41, 34, '1058 Elkelton Blvd #33', '91977', 'Spring Valley', 'USA', '(619) 530-4876', NULL, NULL, NULL, NULL, '2022-10-23 13:28:43', '2022-10-23 13:28:43'),
(42, 35, '389 Pebble Beach Run', '78130', 'New Braunfels', 'United States', '(210) 773-6002', NULL, NULL, NULL, NULL, '2022-11-19 16:53:20', '2022-11-19 16:53:20'),
(43, 36, '13 Eberle Road', '15340', 'Hickory', 'United States', '(412) 378-7741', 'Paypal', 'Checking', '22119817491245687', 'bc1qs3gqys8svj7jz0mvpfkfn0lxet20mwwvc2c224', '2022-11-29 05:43:21', '2022-11-29 06:02:45'),
(44, 37, '3941 Madison Ave, Apt #103', '95660', 'North Highlands', 'United States', '(650) 490-8341', NULL, NULL, NULL, NULL, '2022-12-16 10:57:58', '2022-12-16 10:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `link`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brand 1', 'https://www.coca-colacompany.com', 'QsudLtkwYK.jpg', '2021-05-28 05:56:46', '2021-05-28 05:56:46', NULL),
(2, 'brand 1', 'https://en.cdprojektred.com/', 'RBcTh3uXPs.jpg', '2021-05-28 05:56:55', '2021-05-28 05:56:55', NULL),
(3, 'Gatorade', 'https://en.cdprojektred.com/', 'G0nBvbWQWa.jpg', '2021-05-28 05:57:12', '2021-05-28 05:57:12', NULL),
(4, 'asd', 'https://www.coca-colacompany.com', 'Ajl1CIETCK.jpg', '2021-05-28 05:57:19', '2021-05-28 05:57:19', NULL),
(5, 'ads', 'https://www.coca-colacompany.com', 'ZBJgUTXWgb.jpg', '2021-05-28 05:57:27', '2021-05-28 05:57:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ammount` bigint(191) DEFAULT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `order_id`, `price`, `qty`, `ammount`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 29, 1, '50.00', '2', 100, '100', '2022-01-14 05:12:42', '2022-01-14 05:12:42'),
(2, 29, 2, '10.00', '1', 10, '10', '2022-01-14 05:22:02', '2022-01-14 05:22:02'),
(3, 29, 3, '10.00', '8', 80, '605', '2022-01-14 22:34:53', '2022-01-14 22:34:53'),
(4, 29, 3, '25.00', '7', 175, '605', '2022-01-14 22:34:53', '2022-01-14 22:34:53'),
(5, 29, 3, '50.00', '7', 350, '605', '2022-01-14 22:34:53', '2022-01-14 22:34:53'),
(6, 29, 4, '10.00', '4', 40, '140', '2022-01-15 01:02:44', '2022-01-15 01:02:44'),
(7, 29, 4, '25.00', '4', 100, '140', '2022-01-15 01:02:44', '2022-01-15 01:02:44'),
(8, 29, 5, '10.00', '17', 170, '620', '2022-01-15 04:52:13', '2022-01-15 04:52:13'),
(9, 29, 5, '50.00', '9', 450, '620', '2022-01-15 04:52:13', '2022-01-15 04:52:13'),
(10, 29, 6, '10.00', '5', 50, '800', '2022-01-15 04:52:54', '2022-01-15 04:52:54'),
(11, 29, 6, '50.00', '15', 750, '800', '2022-01-15 04:52:54', '2022-01-15 04:52:54'),
(12, 29, 7, '10.00', '17', 170, '170', '2022-01-15 04:53:28', '2022-01-15 04:53:28'),
(13, 29, 8, '10.00', '12', 120, '195', '2022-01-15 04:54:27', '2022-01-15 04:54:27'),
(14, 29, 8, '25.00', '3', 75, '195', '2022-01-15 04:54:27', '2022-01-15 04:54:27'),
(15, 29, 9, '10.00', '5', 50, '125', '2022-01-15 22:58:01', '2022-01-15 22:58:01'),
(16, 29, 9, '25.00', '3', 75, '125', '2022-01-15 22:58:01', '2022-01-15 22:58:01'),
(17, 29, 10, '10.00', '3', 30, '80', '2022-01-16 03:16:30', '2022-01-16 03:16:30'),
(18, 29, 10, '25.00', '2', 50, '80', '2022-01-16 03:16:30', '2022-01-16 03:16:30'),
(19, 29, 11, '10.00', '3', 30, '105', '2022-01-19 22:00:27', '2022-01-19 22:00:27'),
(20, 29, 11, '25.00', '3', 75, '105', '2022-01-19 22:00:27', '2022-01-19 22:00:27'),
(21, 31, 12, '10.00', '1', 10, '10', '2022-01-20 03:41:06', '2022-01-20 03:41:06'),
(22, 31, 13, '10.00', '1', 10, '25', '2022-01-21 00:58:06', '2022-01-21 00:58:06'),
(23, 31, 14, '10.00', '1', 10, '10', '2022-01-21 01:00:02', '2022-01-21 01:00:02'),
(24, 31, 15, '50.00', '1', 50, '50', '2022-01-21 01:00:22', '2022-01-21 01:00:22'),
(25, 31, 16, '25.00', '1', 25, '25', '2022-01-21 01:00:35', '2022-01-21 01:00:35'),
(26, 31, 17, '10.00', '1', 10, '60', '2022-01-21 01:00:54', '2022-01-21 01:00:54'),
(27, 31, 17, '50.00', '1', 50, '60', '2022-01-21 01:00:54', '2022-01-21 01:00:54'),
(28, 31, 18, '10.00', '1', 10, '25', '2022-01-21 01:01:55', '2022-01-21 01:01:55'),
(29, 31, 19, '25.00', '1', 25, '25', '2022-01-21 01:02:20', '2022-01-21 01:02:20'),
(30, 29, 20, '25.00', '2', 50, '50', '2022-01-21 01:07:16', '2022-01-21 01:07:16'),
(31, 31, 21, '10.00', '1', 10, '10', '2022-01-21 01:07:44', '2022-01-21 01:07:44'),
(32, 31, 22, '25.00', '1', 25, '25', '2022-01-21 01:08:01', '2022-01-21 01:08:01'),
(33, 29, 23, '10.00', '1', 10, '25', '2022-01-21 01:08:58', '2022-01-21 01:08:58'),
(34, 31, 24, '10.00', '1', 10, '25', '2022-01-21 01:10:50', '2022-01-21 01:10:50'),
(35, 29, 25, '10.00', '1', 10, '10', '2022-01-21 01:11:13', '2022-01-21 01:11:13'),
(36, 29, 26, '25.00', '1', 25, '25', '2022-01-21 01:11:24', '2022-01-21 01:11:24'),
(37, 31, 27, '25.00', '1', 25, '25', '2022-01-21 01:11:47', '2022-01-21 01:11:47'),
(38, 29, 28, '25.00', '3', 75, '75', '2022-01-21 01:12:02', '2022-01-21 01:12:02'),
(39, 29, 29, '25.00', '1', 25, '25', '2022-01-21 01:12:14', '2022-01-21 01:12:14'),
(40, 29, 30, '10.00', '3', 30, '105', '2022-01-21 01:12:36', '2022-01-21 01:12:36'),
(41, 29, 31, '10.00', '4', 40, '140', '2022-01-21 01:13:03', '2022-01-21 01:13:03'),
(42, 31, 32, '10.00', '1', 10, '25', '2022-01-21 01:13:19', '2022-01-21 01:13:19'),
(43, 31, 33, '25.00', '1', 25, '25', '2022-01-21 01:14:11', '2022-01-21 01:14:11'),
(44, 29, 34, '10.00', '4', 40, '130', '2022-01-21 01:14:20', '2022-01-21 01:14:20'),
(45, 31, 35, '10.00', '1', 10, '10', '2022-01-21 01:14:45', '2022-01-21 01:14:45'),
(46, 29, 36, '10.00', '4', 40, '100', '2022-01-21 01:14:54', '2022-01-21 01:14:54'),
(47, 31, 38, '25.00', '1', 25, '25', '2022-01-21 01:15:38', '2022-01-21 01:15:38'),
(48, 29, 39, '10.00', '4', 40, '65', '2022-01-21 01:15:46', '2022-01-21 01:15:46'),
(49, 29, 39, '25.00', '1', 25, '65', '2022-01-21 01:15:46', '2022-01-21 01:15:46'),
(50, 29, 40, NULL, '3', 0, '280', '2022-01-21 02:24:21', '2022-01-21 02:24:21'),
(51, 29, 44, NULL, '4', 0, '115', '2022-01-21 02:41:08', '2022-01-21 02:41:08'),
(52, 29, 46, NULL, '4', 0, '340', '2022-01-21 03:05:41', '2022-01-21 03:05:41'),
(53, 29, 47, '50.00', '3', 150, '180', '2022-01-21 03:33:44', '2022-01-21 03:33:44'),
(54, 29, 51, '10.00', '2', 20, '120', '2022-01-21 03:43:31', '2022-01-21 03:43:31'),
(55, 29, 51, '50.00', '2', 100, '120', '2022-01-21 03:43:31', '2022-01-21 03:43:31'),
(56, 29, 52, '10.00', '3', 30, '130', '2022-01-21 03:43:59', '2022-01-21 03:43:59'),
(57, 29, 52, '25.00', '4', 100, '130', '2022-01-21 03:43:59', '2022-01-21 03:43:59'),
(58, 29, 53, '10.00', '2', 20, '70', '2022-01-21 03:44:44', '2022-01-21 03:44:44'),
(59, 29, 54, '10.00', '2', 20, '170', '2022-01-21 03:55:00', '2022-01-21 03:55:00'),
(60, 29, 54, '25.00', '3', 75, '170', '2022-01-21 03:55:00', '2022-01-21 03:55:00'),
(61, 29, 55, '10.00', '3', 30, '105', '2022-01-21 04:03:17', '2022-01-21 04:03:17'),
(62, 29, 55, '25.00', '3', 75, '105', '2022-01-21 04:03:17', '2022-01-21 04:03:17'),
(63, 29, 57, '10.00', '4', 40, '115', '2022-01-21 05:00:40', '2022-01-21 05:00:40'),
(64, 29, 57, '25.00', '3', 75, '115', '2022-01-21 05:00:40', '2022-01-21 05:00:40'),
(65, 31, 58, '10.00', '1', 10, '10', '2022-01-22 03:15:01', '2022-01-22 03:15:01'),
(66, 31, 59, '10.00', '1', 10, '10', '2022-01-22 03:15:38', '2022-01-22 03:15:38'),
(67, 31, 60, '10.00', '1', 10, '35', '2022-01-22 23:56:58', '2022-01-22 23:56:58'),
(68, 31, 60, '25.00', '1', 25, '35', '2022-01-22 23:56:58', '2022-01-22 23:56:58'),
(69, 31, 61, '10.00', '1', 10, '35', '2022-01-23 00:19:35', '2022-01-23 00:19:35'),
(70, 31, 62, '10.00', '1', 10, '10', '2022-01-23 00:20:10', '2022-01-23 00:20:10'),
(71, 31, 63, '10.00', NULL, 0, NULL, '2022-01-23 00:20:38', '2022-01-23 00:20:38'),
(72, 31, 64, '10.00', NULL, 0, NULL, '2022-01-23 00:21:23', '2022-01-23 00:21:23'),
(73, 29, 65, '10.00', NULL, 0, NULL, '2022-01-23 05:04:33', '2022-01-23 05:04:33'),
(74, 29, 66, '10.00', '1', 10, NULL, '2022-01-23 05:14:15', '2022-01-23 05:14:15'),
(75, 29, 72, '10.00', '3', 30, '155', '2022-01-23 22:33:09', '2022-01-23 22:33:09'),
(76, 29, 72, '25.00', '5', 125, '155', '2022-01-23 22:33:09', '2022-01-23 22:33:09'),
(77, 28, 73, '10.00', '1', 10, '135', '2022-01-23 22:40:14', '2022-01-23 22:40:14'),
(78, 28, 73, '25.00', '1', 25, '135', '2022-01-23 22:40:14', '2022-01-23 22:40:14'),
(79, 28, 73, '50.00', '2', 100, '135', '2022-01-23 22:40:14', '2022-01-23 22:40:14'),
(80, 28, 74, '10.00', '3', 30, '205', '2022-01-23 23:15:14', '2022-01-23 23:15:14'),
(81, 28, 74, '25.00', '3', 75, '205', '2022-01-23 23:15:14', '2022-01-23 23:15:14'),
(82, 28, 74, '50.00', '2', 100, '205', '2022-01-23 23:15:14', '2022-01-23 23:15:14'),
(83, 28, 75, '10.00', '1', 10, '35', '2022-01-23 23:17:45', '2022-01-23 23:17:45'),
(84, 28, 75, '25.00', '1', 25, '35', '2022-01-23 23:17:45', '2022-01-23 23:17:45'),
(85, 28, 76, '10.00', '1', 10, '85', '2022-01-23 23:23:53', '2022-01-23 23:23:53'),
(86, 28, 76, '25.00', '1', 25, '85', '2022-01-23 23:23:53', '2022-01-23 23:23:53'),
(87, 28, 76, '50.00', '1', 50, '85', '2022-01-23 23:23:53', '2022-01-23 23:23:53'),
(88, 28, 78, '10.00', '1', 10, '35', '2022-01-23 23:38:26', '2022-01-23 23:38:26'),
(89, 28, 83, '50.00', NULL, 0, '50', '2022-01-24 00:57:10', '2022-01-24 00:57:10'),
(90, 28, 84, '10.00', '1', 10, '10', '2022-01-24 00:57:16', '2022-01-24 00:57:16'),
(91, 28, 85, '10.00', '1', 10, '10', '2022-01-24 00:58:09', '2022-01-24 00:58:09'),
(92, 28, 87, '10.00', '1', 10, '10', '2022-01-24 00:58:48', '2022-01-24 00:58:48'),
(93, 29, 88, '10.00', '1', 10, '85', '2022-01-24 02:21:50', '2022-01-24 02:21:50'),
(94, 29, 88, '50.00', '1', 50, '85', '2022-01-24 02:21:50', '2022-01-24 02:21:50'),
(95, 29, 89, '10.00', '1', 10, '10', '2022-01-24 02:24:14', '2022-01-24 02:24:14'),
(96, 29, 90, '25.00', '1', 25, '25', '2022-01-24 02:26:30', '2022-01-24 02:26:30'),
(97, 28, 91, '10.00', '1', 10, '35', '2022-01-24 03:18:16', '2022-01-24 03:18:16'),
(98, 28, 92, '10.00', '1', 10, '35', '2022-01-24 03:19:43', '2022-01-24 03:19:43'),
(99, 29, 93, '10.00', '4', 40, '415', '2022-01-24 03:45:09', '2022-01-24 03:45:09'),
(100, 29, 94, '10.00', '4', 40, '165', '2022-01-24 03:57:38', '2022-01-24 03:57:38'),
(101, 29, 94, '25.00', '5', 125, '165', '2022-01-24 03:57:38', '2022-01-24 03:57:38'),
(102, 28, 95, '10.00', '1', 10, '10', '2022-01-24 05:01:50', '2022-01-24 05:01:50'),
(103, 29, 96, '10.00', '1', 10, '10', '2022-01-24 05:53:32', '2022-01-24 05:53:32'),
(104, 28, 97, '10.00', '1', 10, '85', '2022-01-26 14:38:12', '2022-01-26 14:38:12'),
(105, 28, 97, '25.00', '1', 25, '85', '2022-01-26 14:38:12', '2022-01-26 14:38:12'),
(106, 28, 97, '50.00', '1', 50, '85', '2022-01-26 14:38:12', '2022-01-26 14:38:12'),
(107, 29, 98, '10.00', '4', 40, '340', '2022-01-26 21:02:00', '2022-01-26 21:02:00'),
(108, 29, 98, '25.00', '4', 100, '340', '2022-01-26 21:02:00', '2022-01-26 21:02:00'),
(109, 29, 98, '50.00', '4', 200, '340', '2022-01-26 21:02:00', '2022-01-26 21:02:00'),
(110, 32, 99, '10.00', '10', 100, '400', '2022-01-27 00:48:54', '2022-01-27 00:48:54'),
(111, 32, 99, '25.00', '2', 50, '400', '2022-01-27 00:48:54', '2022-01-27 00:48:54'),
(112, 32, 99, '50.00', '5', 250, '400', '2022-01-27 00:48:54', '2022-01-27 00:48:54'),
(113, 31, 100, '10.00', '1', 10, '285', '2022-01-27 01:55:32', '2022-01-27 01:55:32'),
(114, 31, 100, '25.00', '3', 75, '285', '2022-01-27 01:55:32', '2022-01-27 01:55:32'),
(115, 31, 100, '50.00', '4', 200, '285', '2022-01-27 01:55:32', '2022-01-27 01:55:32'),
(116, 29, 101, '10.00', '1', 10, '10', '2022-01-30 06:13:36', '2022-01-30 06:13:36'),
(117, 29, 102, '10.00', '1', 10, '10', '2022-01-30 06:15:49', '2022-01-30 06:15:49'),
(118, 34, 103, '10.00', '2', 20, '20', '2022-02-05 20:59:25', '2022-02-05 20:59:25'),
(119, 28, 104, '10.00', '1', 10, '10', '2022-02-06 15:37:28', '2022-02-06 15:37:28'),
(120, 28, 105, '10.00', '1', 10, '10', '2022-02-06 17:58:22', '2022-02-06 17:58:22'),
(121, 28, 106, '10.00', '1', 10, '10', '2022-02-06 17:58:57', '2022-02-06 17:58:57'),
(122, 28, 107, '10.00', '1', 10, '10', '2022-02-06 22:14:07', '2022-02-06 22:14:07'),
(123, 28, 108, '10.00', '1', 10, '10', '2022-02-06 22:15:21', '2022-02-06 22:15:21'),
(124, 28, 109, '10.00', '1', 10, '10', '2022-02-09 14:14:09', '2022-02-09 14:14:09'),
(125, 28, 110, '10.00', '1', 10, '10', '2022-02-09 14:26:20', '2022-02-09 14:26:20'),
(126, 28, 111, '10.00', '1', 10, '10', '2022-02-09 14:43:30', '2022-02-09 14:43:30'),
(127, 28, 112, '10.00', '1', 10, '10', '2022-02-09 14:43:56', '2022-02-09 14:43:56'),
(128, 28, 113, '10.00', '1', 10, '10', '2022-02-09 14:45:54', '2022-02-09 14:45:54'),
(129, 28, 114, '10.00', '1', 10, '10', '2022-02-09 14:46:10', '2022-02-09 14:46:10'),
(130, 28, 115, '10.00', '1', 10, '10', '2022-02-09 14:47:42', '2022-02-09 14:47:42'),
(131, 28, 116, '10.00', '1', 10, '10', '2022-02-09 14:48:45', '2022-02-09 14:48:45'),
(132, 28, 117, '10.00', '1', 10, '10', '2022-02-09 14:50:32', '2022-02-09 14:50:32'),
(133, 28, 118, '10.00', '1', 10, '10', '2022-02-09 14:51:55', '2022-02-09 14:51:55'),
(134, 28, 119, '10.00', '1', 10, '10', '2022-02-09 14:52:02', '2022-02-09 14:52:02'),
(135, 28, 120, '10.00', '1', 10, '10', '2022-02-09 14:52:08', '2022-02-09 14:52:08'),
(136, 28, 121, '10.00', '1', 10, '10', '2022-02-09 14:52:29', '2022-02-09 14:52:29'),
(137, 28, 122, '10.00', '1', 10, '10', '2022-02-09 14:54:36', '2022-02-09 14:54:36'),
(138, 28, 123, '10.00', '1', 10, '10', '2022-02-09 16:23:19', '2022-02-09 16:23:19'),
(139, 28, 124, '10.00', '1', 10, '35', '2022-02-09 18:40:21', '2022-02-09 18:40:21'),
(140, 28, 124, '25.00', '1', 25, '35', '2022-02-09 18:40:21', '2022-02-09 18:40:21'),
(141, 28, 125, '10.00', '1', 10, '35', '2022-02-09 18:40:44', '2022-02-09 18:40:44'),
(142, 28, 125, '25.00', '1', 25, '35', '2022-02-09 18:40:44', '2022-02-09 18:40:44'),
(143, 28, 126, '10.00', '1', 10, '35', '2022-02-09 18:41:20', '2022-02-09 18:41:20'),
(144, 28, 126, '25.00', '1', 25, '35', '2022-02-09 18:41:20', '2022-02-09 18:41:20'),
(145, 28, 127, '10.00', '1', 10, '35', '2022-02-09 18:41:42', '2022-02-09 18:41:42'),
(146, 28, 127, '25.00', '1', 25, '35', '2022-02-09 18:41:42', '2022-02-09 18:41:42'),
(147, 28, 128, '10.00', '2', 20, '95', '2022-02-09 18:55:31', '2022-02-09 18:55:31'),
(148, 28, 128, '25.00', '1', 25, '95', '2022-02-09 18:55:31', '2022-02-09 18:55:31'),
(149, 28, 128, '50.00', '1', 50, '95', '2022-02-09 18:55:31', '2022-02-09 18:55:31'),
(150, 28, 129, '10.00', '1', 10, '85', '2022-02-09 19:15:57', '2022-02-09 19:15:57'),
(151, 28, 129, '25.00', '1', 25, '85', '2022-02-09 19:15:57', '2022-02-09 19:15:57'),
(152, 28, 129, '50.00', '1', 50, '85', '2022-02-09 19:15:57', '2022-02-09 19:15:57'),
(153, 34, 130, '10.00', '1', 10, '10', '2022-02-12 01:58:15', '2022-02-12 01:58:15'),
(154, 28, 131, '10.00', '1', 10, '35', '2022-02-13 15:17:18', '2022-02-13 15:17:18'),
(155, 28, 131, '25.00', '1', 25, '35', '2022-02-13 15:17:18', '2022-02-13 15:17:18'),
(156, 28, 132, '10.00', '1', 10, '35', '2022-02-18 21:32:21', '2022-02-18 21:32:21'),
(157, 28, 132, '25.00', '1', 25, '35', '2022-02-18 21:32:21', '2022-02-18 21:32:21'),
(158, 28, 133, '10.00', '1', 10, '35', '2022-02-24 18:24:19', '2022-02-24 18:24:19'),
(159, 28, 133, '25.00', '1', 25, '35', '2022-02-24 18:24:19', '2022-02-24 18:24:19'),
(160, 2, 134, '10.00', '1', 10, '10', '2022-03-03 05:48:54', '2022-03-03 05:48:54'),
(161, 2, 135, '10.00', '1', 10, '10', '2022-03-03 13:58:54', '2022-03-03 13:58:54'),
(162, 2, 136, '10.00', '1', 10, '10', '2022-03-03 15:08:48', '2022-03-03 15:08:48'),
(163, 2, 137, '10.00', '1', 10, '10', '2022-03-04 11:10:42', '2022-03-04 11:10:42'),
(164, 2, 138, '10.00', '1', 10, '10', '2022-03-04 11:13:20', '2022-03-04 11:13:20'),
(165, 38, 139, '10.00', '1', 10, '10', '2022-03-06 15:32:59', '2022-03-06 15:32:59'),
(166, 3, 140, '10.00', '1', 10, '10', '2022-03-06 15:54:27', '2022-03-06 15:54:27'),
(167, 39, 141, '10.00', '1', 10, '135', '2022-03-10 09:25:28', '2022-03-10 09:25:28'),
(168, 39, 141, '25.00', '3', 75, '135', '2022-03-10 09:25:28', '2022-03-10 09:25:28'),
(169, 39, 141, '50.00', '1', 50, '135', '2022-03-10 09:25:28', '2022-03-10 09:25:28'),
(170, 41, 142, '10.00', '1', 10, '10', '2022-03-11 09:03:40', '2022-03-11 09:03:40'),
(171, 41, 143, '10.00', '1', 10, '10', '2022-03-11 09:20:49', '2022-03-11 09:20:49'),
(172, 41, 144, '10.00', '1', 10, '10', '2022-03-11 17:44:26', '2022-03-11 17:44:26'),
(173, 41, 145, '10.00', '1', 10, '10', '2022-03-11 17:51:48', '2022-03-11 17:51:48'),
(174, 41, 146, '25.00', '1', 25, '25', '2022-03-12 11:04:09', '2022-03-12 11:04:09'),
(175, 40, 147, '10.00', '2', 20, '20', '2022-03-16 18:36:32', '2022-03-16 18:36:32'),
(176, 40, 148, '10.00', '2', 20, '370', '2022-03-16 18:36:49', '2022-03-16 18:36:49'),
(177, 40, 148, '25.00', '14', 350, '370', '2022-03-16 18:36:49', '2022-03-16 18:36:49'),
(178, 39, 149, '10.00', '3', 30, '30', '2022-03-17 14:03:01', '2022-03-17 14:03:01'),
(179, 39, 150, '10.00', '1', 10, '10', '2022-03-30 19:12:23', '2022-03-30 19:12:23'),
(180, 40, 151, '10.00', '1', 10, '35', '2022-04-10 10:34:22', '2022-04-10 10:34:22'),
(181, 40, 151, '25.00', '1', 25, '35', '2022-04-10 10:34:22', '2022-04-10 10:34:22'),
(182, 40, 152, '10.00', '1', 10, '185', '2022-04-16 12:16:33', '2022-04-16 12:16:33'),
(183, 40, 152, '25.00', '1', 25, '185', '2022-04-16 12:16:33', '2022-04-16 12:16:33'),
(184, 40, 152, '50.00', '3', 150, '185', '2022-04-16 12:16:33', '2022-04-16 12:16:33'),
(185, 39, 153, '10.00', '1', 10, '10', '2022-05-12 11:07:21', '2022-05-12 11:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_no`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'dsdfgsre', '2021-07-04 16:50:58', '2021-07-04 16:50:58', NULL),
(2, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'dawfef', '2021-07-04 16:51:29', '2021-07-04 16:51:29', NULL),
(3, 'Fred Aston', 'testconsignor@gmail.com', '5555555555', 'fdegswrgs', '2021-07-04 16:56:36', '2021-07-04 16:56:36', NULL),
(4, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'ergdfhb', '2021-07-04 17:03:15', '2021-07-04 17:03:15', NULL),
(5, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'afafgeswr', '2021-07-04 17:05:44', '2021-07-04 17:05:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(191) DEFAULT 0,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(9, 'VISA Digital Gift Card', 0, '25', '2022-02-12 02:14:42', '2022-02-12 02:14:42'),
(10, 'VISA Digital Gift Card', 0, '100', '2022-02-12 02:14:52', '2022-02-12 02:14:52'),
(11, 'Amazon Gift Card', 0, '10', '2022-02-12 02:15:31', '2022-02-12 02:15:31'),
(12, 'Amazon Gift Card', 0, '25', '2022-02-12 02:15:39', '2022-02-12 02:15:39'),
(13, 'Amazon Gift Card', 0, '100', '2022-02-12 02:15:50', '2022-02-12 02:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `game_type` int(11) DEFAULT NULL,
  `deposit_amount_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `game_type`, `deposit_amount_box`, `pin_code_box`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, NULL, '211', '45454', 0, '2022-09-05 18:46:44', '2022-09-05 18:46:44'),
(2, 10, NULL, '29', '1', 0, '2022-09-05 18:46:57', '2022-09-05 18:46:57'),
(3, 10, NULL, '8', '59', 0, '2022-09-05 18:48:12', '2022-09-05 18:48:12'),
(4, 10, NULL, '54', '73', 0, '2022-09-05 18:49:49', '2022-09-05 18:49:49'),
(5, 10, 1, '656', '6544', 0, '2022-09-05 18:54:04', '2022-09-05 18:54:04'),
(6, 10, 2, '86', '71', 0, '2022-09-05 19:12:24', '2022-09-05 19:12:24'),
(7, 10, 1, '51', '3', 0, '2022-09-05 19:14:13', '2022-09-05 19:14:13'),
(8, 9, 2, '40', '36', 1, '2022-09-06 00:39:59', '2022-09-06 01:17:20'),
(9, 9, 2, '51', '38', 0, '2022-09-06 19:25:16', '2022-09-06 19:25:16'),
(10, 9, 2, '47', '29', 0, '2022-09-07 01:46:47', '2022-09-07 01:46:47'),
(11, 9, 2, '82', '81', 0, '2022-09-07 20:27:56', '2022-09-07 20:27:56'),
(12, 9, 1, '76', '43', 0, '2022-09-07 21:21:42', '2022-09-07 21:21:42'),
(13, 9, 2, '95', '17', 0, '2022-09-07 21:28:20', '2022-09-07 21:28:20'),
(14, 9, 1, '83', '3', 0, '2022-09-07 21:34:53', '2022-09-07 21:34:53'),
(15, 9, 2, '72', '97', 0, '2022-09-07 21:35:47', '2022-09-07 21:35:47'),
(16, 9, 1, '27', '54', 0, '2022-09-07 21:35:56', '2022-09-07 21:35:56'),
(17, 9, 1, '71', '8', 0, '2022-09-07 21:38:11', '2022-09-07 21:38:11'),
(18, 9, 2, '3', '17', 0, '2022-09-07 21:39:35', '2022-09-07 21:39:35'),
(19, 9, 1, '78', '6', 0, '2022-09-07 21:39:39', '2022-09-07 21:39:39'),
(20, 9, 2, '5', '38', 0, '2022-09-07 21:40:10', '2022-09-07 21:40:10'),
(21, 9, 2, '43', '22', 0, '2022-09-07 21:40:45', '2022-09-07 21:40:45'),
(22, 9, 1, '1', '74', 0, '2022-09-07 21:40:49', '2022-09-07 21:40:49'),
(23, 9, 1, '56', '42', 0, '2022-09-07 22:11:24', '2022-09-07 22:11:24'),
(24, 9, 2, '92', '98', 0, '2022-09-07 22:18:23', '2022-09-07 22:18:23'),
(25, 14, 1, '34', '48', 0, '2022-09-08 18:27:13', '2022-09-08 18:27:13'),
(26, 14, 2, '13', '38', 0, '2022-09-08 19:28:27', '2022-09-08 19:28:27'),
(27, 14, 1, '30', '44', 0, '2022-09-08 19:47:12', '2022-09-08 19:47:12'),
(28, 14, 2, '45', '94', 0, '2022-09-08 20:57:19', '2022-09-08 20:57:19'),
(29, 14, 2, '93', '58', 0, '2022-09-08 22:57:27', '2022-09-08 22:57:27'),
(30, 14, 2, '27', '74', 0, '2022-09-08 23:58:44', '2022-09-08 23:58:44'),
(31, 14, 2, '68', '37', 0, '2022-09-09 01:40:32', '2022-09-09 01:40:32'),
(32, 14, 2, '41', '69', 1, '2022-09-09 20:16:47', '2022-09-13 21:30:20'),
(33, 14, 1, '49', '97', 1, '2022-09-09 22:08:25', '2022-09-13 21:30:17'),
(34, 14, 2, '79', '9', 1, '2022-09-09 22:12:39', '2022-09-13 21:30:14'),
(35, 4, 1, '13', '46', 0, '2022-09-16 06:20:38', '2022-09-16 06:20:38'),
(36, 4, 1, '18', '63', 1, '2022-09-16 22:37:41', '2022-09-17 02:10:37'),
(37, 4, 1, '12', '17', 1, '2022-09-17 04:13:20', '2022-09-19 23:19:49'),
(38, 3, 1, '20', '1', 0, '2022-09-19 23:30:54', '2022-09-19 23:30:54'),
(39, 4, 1, '68', '15', 0, '2022-09-20 01:57:17', '2022-09-20 04:31:38'),
(40, 4, 1, '66', '25', 1, '2022-09-20 23:36:06', '2022-09-20 23:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`, `question`, `answer`) VALUES
(5, '2022-01-30 03:03:32', '2022-08-18 01:07:00', 'What are your hours?', '<p>Sunday 12pm - 12am EST</p>\r\n\r\n<p>Monday -&nbsp;Thursday&nbsp;10am&nbsp;&ndash; 2am EST</p>\r\n\r\n<p>Fridays and Saturdays&nbsp;10am - 3am EST</p>\r\n\r\n<p>Our cashiers are offline during closed hours and will reply to any overnight requests/ deposits upon arrival&nbsp;at 10 am EST</p>'),
(8, '2022-01-30 03:06:12', '2022-08-18 01:07:20', 'Do you offer Free Play?', '<p>Sorry, no Free Play. But we always have Promos, Specials, Happy Hours, and Daily Wheels! Check our website, and social media, or message us for details!</p>'),
(9, '2022-01-30 03:07:16', '2022-08-18 01:07:37', 'What games do you offer?', '<p>We provide credit services for RiverSweeps games. More&nbsp;games are coming&nbsp;soon!</p>'),
(10, '2022-01-30 03:07:30', '2022-08-18 01:08:07', 'How Do I Make A Deposit?', '<p>Right now we only offer deposits through Cashapp.&nbsp;We are working on a new payment system and will announce it soon!</p>\r\n\r\n<p>Cash apps change often and are very specific. Please make sure you are sending and requesting from us! Scammers exist and we are not responsible for misspelled tags or money sent to the wrong individual.&nbsp;</p>'),
(11, '2022-08-18 01:08:26', '2022-08-18 01:08:26', 'My password isn\'t working!', '<p>If you find that your password isn&rsquo;t working you should first try closing the app and restarting it. Restarting your phone also helps. If this continues, you can give a cashier permission to delete your password. We are not able to provide you with your password because we cannot see it.</p>'),
(12, '2022-08-18 01:09:10', '2022-08-18 01:09:10', 'Why didn\'t I receive my Daily Spin?', '<p>To take part in RiverSweeps Daily Spin Prize drawing: -&nbsp;</p>\r\n\r\n<p>Players must be active (Daily Wheel becomes available starting from 100$ total bets reached by a player).&nbsp;</p>\r\n\r\n<p>Players must make deposits not less than once per 3 days (min deposit 10).&nbsp;</p>\r\n\r\n<p>Video Info Available here:&nbsp;<a href=\"https://www.youtube.com/watch?v=y01SAII6uJg\" target=\"_blank\">https://www.youtube.com/watch?v=y01SAII6uJg</a></p>'),
(13, '2022-08-18 01:09:49', '2022-08-18 01:09:49', 'How can I buy more credits with my winnings?', '<p>In the games when you reach zero credits, there is usually a screen that allows you to &#39;Buy Internet Time&#39;, that is credits. You can also click the 3 lines in the corner of most games for Options and &#39;Buy Internet Time&#39; there too.</p>'),
(14, '2022-08-18 01:10:13', '2022-08-18 01:10:36', 'How can I redeem my winnings?', '<p>Please send a request to the cash app for redeems. We switch these daily so message us for the current working cash app for redeems.</p>\r\n\r\n<p>The max is 250 a day&nbsp;from 12 pm - 12 am (EST)</p>\r\n\r\n<p>New Payment System coming soon! To redeem your winnings click the Redeem tab. Once your game credits have been deducted they will be added to your player prize account. You then have 3 options to collect your winnings! 1. You can visit our Gift Card store and choose digital cards. Once purchased they are emailed to you immediately. 2. You can request to be paid in Bitcoin (you must have a Bitcoin wallet set up)</p>'),
(15, '2022-08-18 01:10:58', '2022-08-18 01:10:58', 'What is the minimum I can deposit?', '<p>We have a 10 deposit minimum.</p>'),
(16, '2022-08-18 01:11:13', '2022-08-18 01:11:13', 'What is your maximum payout per day?', '<p>We have a $50 minimum cashout (x3) and a $250 daily cashout maximum.</p>'),
(17, '2022-08-18 01:11:28', '2022-08-18 01:11:28', 'Is this for Real Money?', '<p>We offer credits for gameplay within the RiverSweeps games. Your winnings are redeemable for credit back via CashApp.</p>'),
(18, '2022-08-18 01:11:51', '2022-08-18 01:11:51', 'Do you offer referral credits?', '<p>Absolutely,&nbsp;Yes! We have a great referral program. If you refer a new player, when they sign up they MUST mention your name AND make an initial deposit of $20 or more. When this happens, you will receive an equal referral match which will be added to your player account.</p>'),
(19, '2022-08-18 01:12:16', '2022-08-18 01:12:16', 'The game took my money / The game changed my bet... Can you give me free credits for the inconvenience?', '<p>I am sorry that happened. Unfortunately, we only provide credits. We have no control over gameplay and we are unable to add credits to accounts without a deposit. Please play at your own risk.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Customized URL link for you!', '2021-05-28 05:59:55', '2021-06-25 17:27:53', NULL),
(2, 'List every star rating you have earned on 1 page', '2021-05-28 06:00:02', '2021-05-28 06:00:02', NULL),
(3, 'No need for a twitter limit in this bio', '2021-05-28 06:00:07', '2021-05-28 06:00:07', NULL),
(4, 'List multiple hudl, camp and personal training videos on your profile', '2021-05-28 06:00:13', '2021-05-28 06:00:13', NULL),
(5, 'List your news articles, junior day visits and offers!', '2021-05-28 06:00:19', '2021-05-28 06:00:19', NULL),
(6, 'Most comprehensive player profile in the industry!', '2021-05-28 06:00:24', '2021-05-28 06:00:24', NULL),
(7, 'Created BY Specialists FOR Specialists!', '2021-05-28 06:00:28', '2021-05-28 06:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gametypes`
--

CREATE TABLE `gametypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gametypes`
--

INSERT INTO `gametypes` (`id`, `game_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'River sweep', 0, '2022-09-06 19:09:16', '2022-09-06 19:09:16'),
(2, 'Golden Dragon', 0, '2022-09-06 19:09:39', '2022-09-06 19:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'REMAIN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `coupon_id`, `user_id`, `card_number`, `serial_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 29, '904', '409', 'SOLD', '2022-01-13 03:39:04', '2022-01-16 03:25:27'),
(2, 1, 29, '904', '409', 'SOLD', '2022-01-13 03:39:04', '2022-01-16 03:25:42'),
(3, 1, 29, '633', '21', 'SOLD', '2022-01-13 03:39:04', '2022-01-19 22:01:13'),
(4, 1, 29, '95', '218989', 'SOLD', '2022-01-13 03:39:04', '2022-01-19 22:01:13'),
(5, 1, 29, '339', '21556', 'SOLD', '2022-01-13 03:39:04', '2022-01-19 22:01:13'),
(7, 2, 29, '904', '885', 'SOLD', '2022-01-14 01:58:42', '2022-01-19 22:34:21'),
(8, 3, 29, '791', '885', 'SOLD', '2022-01-14 01:59:21', '2022-01-19 22:43:50'),
(9, NULL, NULL, NULL, NULL, 'REMAIN', NULL, NULL),
(10, 3, 29, '123321123@@', '1234', 'SOLD', '2022-01-20 02:57:24', '2022-01-24 06:10:24'),
(11, 1, 28, '123321123@@', '1234', 'SOLD', '2022-01-20 02:58:04', '2022-01-20 03:03:49'),
(12, 1, 28, '791', '891', 'SOLD', '2022-01-20 02:59:15', '2022-01-20 03:02:09'),
(13, 1, 28, '904', '409', 'SOLD', '2022-01-20 02:59:15', '2022-01-20 03:02:09'),
(14, 1, 28, '904', '21', 'SOLD', '2022-01-20 02:59:15', '2022-01-20 03:02:09'),
(15, 1, 28, '123s', '222', 'SOLD', '2022-01-20 03:04:38', '2022-01-20 03:05:07'),
(16, 1, 28, '23232', '2221', 'SOLD', '2022-01-20 03:04:38', '2022-01-20 03:05:07'),
(17, 2, 31, '1234', '5678', 'SOLD', '2022-01-20 03:32:15', '2022-01-20 03:33:02'),
(18, 2, 31, '3456', '0000', 'SOLD', '2022-01-20 03:38:58', '2022-01-20 03:39:32'),
(19, 4, 31, '55555', '666666', 'SOLD', '2022-01-23 00:13:04', '2022-01-23 00:16:31'),
(20, 4, 28, '23423', '234242', 'SOLD', '2022-01-24 00:16:41', '2022-01-24 00:17:15'),
(21, 4, 28, '234', 'test', 'SOLD', '2022-01-24 00:18:29', '2022-01-24 00:18:39'),
(22, 4, 29, 'test', 'test', 'SOLD', '2022-01-24 00:19:29', '2022-01-24 05:55:36'),
(23, 4, 28, '111', '111', 'SOLD', '2022-01-24 04:39:43', '2022-01-24 05:00:55'),
(24, 2, 29, '111', '21321', 'SOLD', '2022-01-24 06:11:09', '2022-01-24 06:31:00'),
(25, 3, 29, '213', '123', 'SOLD', '2022-01-24 06:11:27', '2022-01-24 06:31:00'),
(26, 4, 29, '1231', '12312', 'SOLD', '2022-01-24 06:11:27', '2022-01-24 06:31:00'),
(27, 2, 29, 'test', 'test', 'SOLD', '2022-01-24 06:34:31', '2022-01-26 21:05:16'),
(28, 3, 29, '234', '234', 'SOLD', '2022-01-24 06:34:31', '2022-01-26 21:05:16'),
(29, 4, 29, '2222222', '2222', 'SOLD', '2022-01-24 06:34:31', '2022-01-26 21:05:16'),
(30, 2, 32, '12369', '1', 'SOLD', '2022-01-27 00:53:22', '2022-01-27 00:54:26'),
(31, 3, 32, '589', '2', 'SOLD', '2022-01-27 00:53:54', '2022-01-27 00:54:26'),
(32, 4, 31, '4798', '3', 'SOLD', '2022-01-27 00:53:54', '2022-01-27 02:04:35'),
(33, 5, 32, '4798', '4', 'SOLD', '2022-01-27 00:53:54', '2022-01-27 00:54:26'),
(34, 6, 32, '21651', '3', 'SOLD', '2022-01-27 00:57:11', '2022-01-27 00:58:12'),
(36, 6, 31, '14521', '5', 'SOLD', '2022-01-27 00:57:11', '2022-01-27 02:04:35'),
(37, 2, 31, '111', '111', 'SOLD', '2022-01-27 02:05:42', '2022-01-27 02:07:52'),
(38, 3, NULL, '23', '23', 'REMAIN', '2022-01-27 02:06:54', '2022-01-27 02:06:54'),
(39, 4, 31, '2', '2', 'SOLD', '2022-01-27 02:06:54', '2022-01-28 03:15:39'),
(40, 6, 31, '23', '23', 'SOLD', '2022-01-27 02:06:54', '2022-01-27 02:07:52'),
(41, 6, 31, '23', '23', 'SOLD', '2022-01-27 02:06:54', '2022-01-27 02:07:52'),
(42, 3, NULL, '23', '23', 'REMAIN', '2022-01-27 02:06:54', '2022-01-27 02:06:54'),
(43, 7, 31, '345', '567', 'SOLD', '2022-01-28 03:13:54', '2022-01-28 03:31:39'),
(44, 2, NULL, '567', '678', 'REMAIN', '2022-01-28 03:13:54', '2022-01-28 03:13:54'),
(45, 11, 36, '65W7-CTX8MX-C3AA', '65W7-CTX8MX-C3AA', 'SOLD', '2022-02-26 15:50:50', '2022-02-27 20:31:28'),
(46, 11, 36, '5ZZM-BBY85L-8EAJ', '5ZZM-BBY85L-8EAJ', 'SOLD', '2022-02-26 15:51:11', '2022-02-27 20:26:19'),
(47, 9, 36, 'https://www.vcdelivery.com/vcert/7bb17500-3727-4aca-9bc0-43fdaa311d00', '8405674541', 'SOLD', '2022-02-26 16:12:22', '2022-02-27 22:47:57'),
(48, 9, 36, 'https://www.vcdelivery.com/vcert/ebf69ec0-381d-46ee-99d0-a2ae20746614', '8405674541', 'SOLD', '2022-02-26 16:12:52', '2022-02-27 21:20:26'),
(49, 9, 3, '131', '1321', 'SOLD', '2022-03-02 18:25:21', '2022-03-02 18:25:37'),
(50, 10, 3, '132', '123', 'SOLD', '2022-03-02 18:25:27', '2022-03-02 18:29:02'),
(51, 9, 3, '232', '232', 'SOLD', '2022-03-03 14:41:35', '2022-03-03 14:42:06'),
(52, 10, NULL, '12', '21', 'REMAIN', '2022-03-03 14:41:40', '2022-03-03 14:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(2, 'footer', 'nscWo9j63b.png', '2021-05-28 05:44:13', '2022-08-12 00:31:21'),
(3, 'favicon', 'aXddgGLFeb.png', '2021-05-28 05:44:13', '2022-06-19 04:07:44'),
(4, 'main', 'aJ8BmKsV1X.png', '2021-05-30 06:16:17', '2022-11-12 00:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_04_19_211503_users_type', 1),
(10, '2021_04_22_003508_create_logos_table', 1),
(11, '2021_04_22_030914_create_settings_table', 1),
(12, '2021_05_13_022907_create_banners_table', 1),
(13, '2021_05_17_212144_banner_title_subtitle_longtext', 1),
(14, '2021_05_17_234622_create_articles_table', 1),
(15, '2021_05_18_011132_create_brands_table', 1),
(16, '2021_05_18_015933_brands_link_default', 1),
(17, '2021_05_18_025100_create_features_table', 1),
(18, '2021_05_21_024018_create_packages_table', 1),
(19, '2021_05_21_034623_users_registration_fields', 1),
(20, '2021_05_23_040721_users_mltiple_types', 1),
(21, '2021_05_24_224431_users_profile_section', 1),
(22, '2021_05_24_225425_users_info_fields', 1),
(23, '2021_05_24_235249_users_coach_fields', 1),
(24, '2021_05_25_003319_create_star_ratings_table', 1),
(25, '2021_05_25_053220_users_season_stats', 1),
(26, '2021_05_26_043349_create_user_videos_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(9, 'djoy62471@gmail.com', 0, '2022-12-20 12:54:45', '2022-12-20 12:54:45'),
(10, 'alex5325test@gmail.com', 0, '2022-12-20 13:06:19', '2022-12-20 13:06:19'),
(11, 'fredaston49@gmail.com', 0, '2022-12-20 13:52:32', '2022-12-20 13:52:32'),
(12, 'iamjamesalbertt@gmail.com', 0, '2022-12-20 17:49:32', '2022-12-20 17:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 29, '2022-01-14 05:12:42', '2022-01-14 05:12:42'),
(2, 29, '2022-01-14 05:22:02', '2022-01-14 05:22:02'),
(3, 29, '2022-01-14 22:34:53', '2022-01-14 22:34:53'),
(4, 29, '2022-01-15 01:02:44', '2022-01-15 01:02:44'),
(5, 29, '2022-01-15 04:52:13', '2022-01-15 04:52:13'),
(6, 29, '2022-01-15 04:52:54', '2022-01-15 04:52:54'),
(7, 29, '2022-01-15 04:53:28', '2022-01-15 04:53:28'),
(8, 29, '2022-01-15 04:54:27', '2022-01-15 04:54:27'),
(9, 29, '2022-01-15 22:58:01', '2022-01-15 22:58:01'),
(10, 29, '2022-01-16 03:16:30', '2022-01-16 03:16:30'),
(11, 29, '2022-01-19 22:00:27', '2022-01-19 22:00:27'),
(12, 31, '2022-01-20 03:41:06', '2022-01-20 03:41:06'),
(13, 31, '2022-01-21 00:58:06', '2022-01-21 00:58:06'),
(14, 31, '2022-01-21 01:00:02', '2022-01-21 01:00:02'),
(15, 31, '2022-01-21 01:00:22', '2022-01-21 01:00:22'),
(16, 31, '2022-01-21 01:00:35', '2022-01-21 01:00:35'),
(17, 31, '2022-01-21 01:00:54', '2022-01-21 01:00:54'),
(18, 31, '2022-01-21 01:01:55', '2022-01-21 01:01:55'),
(19, 31, '2022-01-21 01:02:20', '2022-01-21 01:02:20'),
(20, 29, '2022-01-21 01:07:16', '2022-01-21 01:07:16'),
(21, 31, '2022-01-21 01:07:44', '2022-01-21 01:07:44'),
(22, 31, '2022-01-21 01:08:01', '2022-01-21 01:08:01'),
(23, 29, '2022-01-21 01:08:58', '2022-01-21 01:08:58'),
(24, 31, '2022-01-21 01:10:50', '2022-01-21 01:10:50'),
(25, 29, '2022-01-21 01:11:13', '2022-01-21 01:11:13'),
(26, 29, '2022-01-21 01:11:24', '2022-01-21 01:11:24'),
(27, 31, '2022-01-21 01:11:47', '2022-01-21 01:11:47'),
(28, 29, '2022-01-21 01:12:02', '2022-01-21 01:12:02'),
(29, 29, '2022-01-21 01:12:14', '2022-01-21 01:12:14'),
(30, 29, '2022-01-21 01:12:36', '2022-01-21 01:12:36'),
(31, 29, '2022-01-21 01:13:03', '2022-01-21 01:13:03'),
(32, 31, '2022-01-21 01:13:19', '2022-01-21 01:13:19'),
(33, 31, '2022-01-21 01:14:11', '2022-01-21 01:14:11'),
(34, 29, '2022-01-21 01:14:20', '2022-01-21 01:14:20'),
(35, 31, '2022-01-21 01:14:45', '2022-01-21 01:14:45'),
(36, 29, '2022-01-21 01:14:54', '2022-01-21 01:14:54'),
(37, 29, '2022-01-21 01:15:14', '2022-01-21 01:15:14'),
(38, 31, '2022-01-21 01:15:38', '2022-01-21 01:15:38'),
(39, 29, '2022-01-21 01:15:46', '2022-01-21 01:15:46'),
(40, 29, '2022-01-21 02:24:21', '2022-01-21 02:24:21'),
(41, 29, '2022-01-21 02:26:24', '2022-01-21 02:26:24'),
(42, 29, '2022-01-21 02:26:59', '2022-01-21 02:26:59'),
(43, 29, '2022-01-21 02:28:38', '2022-01-21 02:28:38'),
(44, 29, '2022-01-21 02:41:08', '2022-01-21 02:41:08'),
(45, 31, '2022-01-21 03:04:26', '2022-01-21 03:04:26'),
(46, 29, '2022-01-21 03:05:41', '2022-01-21 03:05:41'),
(47, 29, '2022-01-21 03:33:44', '2022-01-21 03:33:44'),
(48, 29, '2022-01-21 03:33:58', '2022-01-21 03:33:58'),
(49, 29, '2022-01-21 03:35:07', '2022-01-21 03:35:07'),
(50, 29, '2022-01-21 03:35:28', '2022-01-21 03:35:28'),
(51, 29, '2022-01-21 03:43:31', '2022-01-21 03:43:31'),
(52, 29, '2022-01-21 03:43:59', '2022-01-21 03:43:59'),
(53, 29, '2022-01-21 03:44:44', '2022-01-21 03:44:44'),
(54, 29, '2022-01-21 03:55:00', '2022-01-21 03:55:00'),
(55, 29, '2022-01-21 04:03:17', '2022-01-21 04:03:17'),
(56, 29, '2022-01-21 04:13:08', '2022-01-21 04:13:08'),
(57, 29, '2022-01-21 05:00:40', '2022-01-21 05:00:40'),
(58, 31, '2022-01-22 03:15:01', '2022-01-22 03:15:01'),
(59, 31, '2022-01-22 03:15:38', '2022-01-22 03:15:38'),
(60, 31, '2022-01-22 23:56:58', '2022-01-22 23:56:58'),
(61, 31, '2022-01-23 00:19:35', '2022-01-23 00:19:35'),
(62, 31, '2022-01-23 00:20:10', '2022-01-23 00:20:10'),
(63, 31, '2022-01-23 00:20:38', '2022-01-23 00:20:38'),
(64, 31, '2022-01-23 00:21:23', '2022-01-23 00:21:23'),
(65, 29, '2022-01-23 05:04:33', '2022-01-23 05:04:33'),
(66, 29, '2022-01-23 05:14:15', '2022-01-23 05:14:15'),
(67, 28, '2022-01-23 22:05:39', '2022-01-23 22:05:39'),
(68, 28, '2022-01-23 22:06:15', '2022-01-23 22:06:15'),
(69, 28, '2022-01-23 22:07:25', '2022-01-23 22:07:25'),
(70, 29, '2022-01-23 22:08:36', '2022-01-23 22:08:36'),
(71, 29, '2022-01-23 22:09:13', '2022-01-23 22:09:13'),
(72, 29, '2022-01-23 22:33:09', '2022-01-23 22:33:09'),
(73, 28, '2022-01-23 22:40:14', '2022-01-23 22:40:14'),
(74, 28, '2022-01-23 23:15:14', '2022-01-23 23:15:14'),
(75, 28, '2022-01-23 23:17:45', '2022-01-23 23:17:45'),
(76, 28, '2022-01-23 23:23:53', '2022-01-23 23:23:53'),
(77, 28, '2022-01-23 23:32:55', '2022-01-23 23:32:55'),
(78, 28, '2022-01-23 23:38:26', '2022-01-23 23:38:26'),
(79, 28, '2022-01-23 23:40:27', '2022-01-23 23:40:27'),
(80, 28, '2022-01-23 23:46:44', '2022-01-23 23:46:44'),
(81, 28, '2022-01-23 23:48:35', '2022-01-23 23:48:35'),
(82, 28, '2022-01-24 00:56:45', '2022-01-24 00:56:45'),
(83, 28, '2022-01-24 00:57:10', '2022-01-24 00:57:10'),
(84, 28, '2022-01-24 00:57:16', '2022-01-24 00:57:16'),
(85, 28, '2022-01-24 00:58:09', '2022-01-24 00:58:09'),
(86, 28, '2022-01-24 00:58:36', '2022-01-24 00:58:36'),
(87, 28, '2022-01-24 00:58:48', '2022-01-24 00:58:48'),
(88, 29, '2022-01-24 02:21:50', '2022-01-24 02:21:50'),
(89, 29, '2022-01-24 02:24:14', '2022-01-24 02:24:14'),
(90, 29, '2022-01-24 02:26:30', '2022-01-24 02:26:30'),
(91, 28, '2022-01-24 03:18:16', '2022-01-24 03:18:16'),
(92, 28, '2022-01-24 03:19:43', '2022-01-24 03:19:43'),
(93, 29, '2022-01-24 03:45:09', '2022-01-24 03:45:09'),
(94, 29, '2022-01-24 03:57:38', '2022-01-24 03:57:38'),
(95, 28, '2022-01-24 05:01:50', '2022-01-24 05:01:50'),
(96, 29, '2022-01-24 05:53:32', '2022-01-24 05:53:32'),
(97, 28, '2022-01-26 14:38:12', '2022-01-26 14:38:12'),
(98, 29, '2022-01-26 21:02:00', '2022-01-26 21:02:00'),
(99, 32, '2022-01-27 00:48:54', '2022-01-27 00:48:54'),
(100, 31, '2022-01-27 01:55:32', '2022-01-27 01:55:32'),
(101, 29, '2022-01-30 06:13:36', '2022-01-30 06:13:36'),
(102, 29, '2022-01-30 06:15:49', '2022-01-30 06:15:49'),
(103, 34, '2022-02-05 20:59:25', '2022-02-05 20:59:25'),
(104, 28, '2022-02-06 15:37:28', '2022-02-06 15:37:28'),
(105, 28, '2022-02-06 17:58:22', '2022-02-06 17:58:22'),
(106, 28, '2022-02-06 17:58:57', '2022-02-06 17:58:57'),
(107, 28, '2022-02-06 22:14:07', '2022-02-06 22:14:07'),
(108, 28, '2022-02-06 22:15:21', '2022-02-06 22:15:21'),
(109, 28, '2022-02-09 14:14:09', '2022-02-09 14:14:09'),
(110, 28, '2022-02-09 14:26:20', '2022-02-09 14:26:20'),
(111, 28, '2022-02-09 14:43:30', '2022-02-09 14:43:30'),
(112, 28, '2022-02-09 14:43:56', '2022-02-09 14:43:56'),
(113, 28, '2022-02-09 14:45:54', '2022-02-09 14:45:54'),
(114, 28, '2022-02-09 14:46:10', '2022-02-09 14:46:10'),
(115, 28, '2022-02-09 14:47:42', '2022-02-09 14:47:42'),
(116, 28, '2022-02-09 14:48:45', '2022-02-09 14:48:45'),
(117, 28, '2022-02-09 14:50:32', '2022-02-09 14:50:32'),
(118, 28, '2022-02-09 14:51:55', '2022-02-09 14:51:55'),
(119, 28, '2022-02-09 14:52:02', '2022-02-09 14:52:02'),
(120, 28, '2022-02-09 14:52:08', '2022-02-09 14:52:08'),
(121, 28, '2022-02-09 14:52:29', '2022-02-09 14:52:29'),
(122, 28, '2022-02-09 14:54:36', '2022-02-09 14:54:36'),
(123, 28, '2022-02-09 16:23:19', '2022-02-09 16:23:19'),
(124, 28, '2022-02-09 18:40:21', '2022-02-09 18:40:21'),
(125, 28, '2022-02-09 18:40:44', '2022-02-09 18:40:44'),
(126, 28, '2022-02-09 18:41:20', '2022-02-09 18:41:20'),
(127, 28, '2022-02-09 18:41:42', '2022-02-09 18:41:42'),
(128, 28, '2022-02-09 18:55:31', '2022-02-09 18:55:31'),
(129, 28, '2022-02-09 19:15:57', '2022-02-09 19:15:57'),
(130, 34, '2022-02-12 01:58:15', '2022-02-12 01:58:15'),
(131, 28, '2022-02-13 15:17:18', '2022-02-13 15:17:18'),
(132, 28, '2022-02-18 21:32:21', '2022-02-18 21:32:21'),
(133, 28, '2022-02-24 18:24:19', '2022-02-24 18:24:19'),
(134, 2, '2022-03-03 05:48:54', '2022-03-03 05:48:54'),
(135, 2, '2022-03-03 13:58:54', '2022-03-03 13:58:54'),
(136, 2, '2022-03-03 15:08:48', '2022-03-03 15:08:48'),
(137, 2, '2022-03-04 11:10:42', '2022-03-04 11:10:42'),
(138, 2, '2022-03-04 11:13:20', '2022-03-04 11:13:20'),
(139, 38, '2022-03-06 15:32:59', '2022-03-06 15:32:59'),
(140, 3, '2022-03-06 15:54:27', '2022-03-06 15:54:27'),
(141, 39, '2022-03-10 09:25:28', '2022-03-10 09:25:28'),
(142, 41, '2022-03-11 09:03:40', '2022-03-11 09:03:40'),
(143, 41, '2022-03-11 09:20:49', '2022-03-11 09:20:49'),
(144, 41, '2022-03-11 17:44:26', '2022-03-11 17:44:26'),
(145, 41, '2022-03-11 17:51:48', '2022-03-11 17:51:48'),
(146, 41, '2022-03-12 11:04:09', '2022-03-12 11:04:09'),
(147, 40, '2022-03-16 18:36:32', '2022-03-16 18:36:32'),
(148, 40, '2022-03-16 18:36:49', '2022-03-16 18:36:49'),
(149, 39, '2022-03-17 14:03:01', '2022-03-17 14:03:01'),
(150, 39, '2022-03-30 19:12:23', '2022-03-30 19:12:23'),
(151, 40, '2022-04-10 10:34:22', '2022-04-10 10:34:22'),
(152, 40, '2022-04-16 12:16:33', '2022-04-16 12:16:33'),
(153, 39, '2022-05-12 11:07:21', '2022-05-12 11:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `img`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '$10', '10.png', '10.00', '2021-05-28 05:50:38', '2022-02-04 11:16:12', NULL),
(2, '$25', '25.png', '25.00', '2021-05-28 05:50:56', '2022-02-04 11:15:46', NULL),
(3, '$50', '50.png', '50.00', '2021-05-28 05:51:13', '2022-02-04 11:16:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uzairhyder33@gmail.com', '$2y$10$sf92HDBg526SXlVCGzzGauiZpDNL/nZ3/3iLvlsvQQCDPnKfA02Eq', '2021-07-04 12:52:30'),
('testdpucode@gmail.com', '$2y$10$4ZXvHrk1svD9Kxx8yA9jiextOgHtXuq5sqh4GhhtvfTXin6URS5L6', '2022-03-25 14:39:22'),
('fredaston49@gmail.com', '$2y$10$6kxwjMjRSh8H9MeAwHsShONz0T0QkWaXa7WBruaBabKhuKymTfC32', '2022-08-31 14:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `amount`, `response_code`, `transaction_id`, `auth_id`, `message_code`, `created_at`, `updated_at`) VALUES
(1, 29, 3, '605', '1', '40080325290', 'HEBPAJ', '1', '2022-01-14 22:35:22', '2022-01-14 22:35:22'),
(2, 29, 4, '140', '1', '40080330973', '0A9KVL', '1', '2022-01-15 01:03:08', '2022-01-15 01:03:08'),
(3, 29, 11, '105', '1', '40080508643', '4M5ZWR', '1', '2022-01-19 22:00:39', '2022-01-19 22:00:39'),
(4, 31, 12, '10', '1', '40080523455', 'XXS7O5', '1', '2022-01-20 03:42:28', '2022-01-20 03:42:28'),
(5, 29, 20, '50', '1', '40080569639', 'JBK4DU', '1', '2022-01-21 01:07:28', '2022-01-21 01:07:28'),
(6, 29, 44, '115', '1', '40080578113', 'UHVIDX', '1', '2022-01-21 02:41:17', '2022-01-21 02:41:17'),
(7, 29, 57, '115', '1', '40080582956', 'DNXDLB', '1', '2022-01-21 05:00:50', '2022-01-21 05:00:50'),
(8, 31, 60, '35', '1', '40080681321', 'XW14LC', '1', '2022-01-23 00:01:21', '2022-01-23 00:01:21'),
(9, 29, 72, '155', '1', '40080726828', 'P0U7KM', '1', '2022-01-23 22:33:26', '2022-01-23 22:33:26'),
(10, 28, 74, '205', '1', '40080730023', 'DNVG86', '1', '2022-01-23 23:16:17', '2022-01-23 23:16:17'),
(11, 29, 88, '85', '1', '40080735872', 'JFZN2J', '1', '2022-01-24 02:23:27', '2022-01-24 02:23:27'),
(12, 29, 89, '10', '1', '40080735898', 'A1A2O1', '1', '2022-01-24 02:24:23', '2022-01-24 02:24:23'),
(13, 29, 90, '25', '1', '40080735959', '7CIK7V', '1', '2022-01-24 02:26:40', '2022-01-24 02:26:40'),
(14, 28, 91, '35', '1', '40080737506', 'FIGFUQ', '1', '2022-01-24 03:18:52', '2022-01-24 03:18:52'),
(15, 28, 92, '35', '1', '40080737541', 'XH5RKT', '1', '2022-01-24 03:20:01', '2022-01-24 03:20:01'),
(16, 29, 94, '165', '1', '40080738522', 'PGIZGC', '1', '2022-01-24 03:58:00', '2022-01-24 03:58:00'),
(17, 29, 96, '10', '1', '40080740979', 'MZYAYS', '1', '2022-01-24 05:53:42', '2022-01-24 05:53:42'),
(18, 32, 99, '400', '1', '40080830852', '4EQIU8', '1', '2022-01-27 00:49:20', '2022-01-27 00:49:20'),
(19, 31, 100, '285', '1', '40080833901', 'V1PP1J', '1', '2022-01-27 01:56:43', '2022-01-27 01:56:43'),
(20, 28, 109, '10', '1', '40081509849', 'VH9CUQ', '1', '2022-02-09 14:26:01', '2022-02-09 14:26:01'),
(21, 34, 130, '10', '1', '40081685899', 'PMYOMI', '1', '2022-02-12 02:02:57', '2022-02-12 02:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `redeems`
--

CREATE TABLE `redeems` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `pin_code` varchar(119) DEFAULT NULL,
  `cashapp_tag` varchar(119) DEFAULT NULL,
  `venmo_tag` varchar(119) DEFAULT NULL,
  `amount_request` varchar(119) DEFAULT NULL,
  `bit_coin_wallet` varchar(119) DEFAULT NULL,
  `bank_name` varchar(119) DEFAULT NULL,
  `aba` varchar(119) DEFAULT NULL,
  `routing` varchar(119) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `request_date` varchar(119) DEFAULT NULL,
  `approve_tag` varchar(119) DEFAULT NULL,
  `approve_id` varchar(119) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `redeems`
--

INSERT INTO `redeems` (`id`, `user_id`, `pin_code`, `cashapp_tag`, `venmo_tag`, `amount_request`, `bit_coin_wallet`, `bank_name`, `aba`, `routing`, `status`, `request_date`, `approve_tag`, `approve_id`, `created_at`, `updated_at`) VALUES
(1, 14, '71', NULL, NULL, '73', '71', NULL, NULL, NULL, 1, '2022-09-09 20:38:18', NULL, NULL, '2022-09-09 22:38:18', '2022-09-09 23:51:34'),
(2, 14, '65', NULL, NULL, '100', '38', NULL, NULL, NULL, 0, '2022-09-13 22:51:47', NULL, NULL, '2022-09-14 00:51:47', '2022-09-14 00:51:47'),
(3, 4, '81', NULL, NULL, '18', '18', NULL, NULL, NULL, 1, '2022-09-15 23:21:19', NULL, NULL, '2022-09-16 06:21:19', '2022-09-16 22:10:54'),
(4, 4, '7657657', NULL, NULL, '765765', '6765', NULL, NULL, NULL, 1, '2022-09-16 16:00:46', NULL, NULL, '2022-09-16 23:00:46', '2022-09-17 02:10:57'),
(5, 3, '12', NULL, NULL, '200', '34', NULL, NULL, NULL, 1, '2022-09-19 16:32:14', NULL, NULL, '2022-09-19 23:32:14', '2022-09-19 23:32:48'),
(6, 4, '56', NULL, NULL, '3', '36', NULL, NULL, NULL, 1, '2022-09-19 21:01:58', NULL, NULL, '2022-09-20 04:01:58', '2022-09-20 04:31:24'),
(7, 4, '97', NULL, NULL, '75', '23', NULL, NULL, NULL, 0, '2022-09-19 23:43:33', NULL, NULL, '2022-09-20 06:43:33', '2022-09-20 06:43:33'),
(8, 3, '50', NULL, NULL, '99', '72', NULL, NULL, NULL, 1, '2022-09-20 00:06:55', NULL, NULL, '2022-09-20 07:06:55', '2022-09-20 23:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Email', 'xyz@gmail.com', NULL, '2022-09-19 23:21:23'),
(2, 'Contact', '(546) 546-5464', NULL, '2022-09-16 22:12:22'),
(3, 'Rights', 'COPYRIGHTS ALL RIGHTS RESERVED', NULL, NULL),
(4, 'Address', 'playriverslot.com', NULL, '2022-08-17 08:10:28'),
(9, 'Facebook  ', 'https://www.facebook.com/', NULL, '2022-08-20 18:52:19'),
(14, 'Instagram', 'https://www.instagram.com/', NULL, '2022-08-20 18:52:19'),
(15, 'Youtube', 'https://www.youtube.com/', NULL, '2022-08-20 18:52:19'),
(16, 'Twitter', 'https://www.twitter.com/', NULL, '2022-08-18 17:22:54'),
(17, 'Free Credit Code', 'MSLADY-3030', NULL, '2022-12-20 17:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `star_ratings`
--

CREATE TABLE `star_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_attended` date DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `star_ratings`
--

INSERT INTO `star_ratings` (`id`, `user_id`, `club_name`, `last_attended`, `rating`, `created_at`, `updated_at`) VALUES
(4, 4, 'LA Galaxy', '2021-05-03', '2.50', '2021-05-31 08:17:01', '2021-05-31 08:17:01'),
(26, 2, 'Real Madrid C F', '2021-06-01', '2.50', '2021-06-04 06:16:10', '2021-06-04 06:16:10'),
(27, 2, 'Ajax Amsterdam', '2021-06-03', '4.50', '2021-06-04 06:16:22', '2021-06-04 06:16:22'),
(28, 10, 'Minnesota State Mankato(Punting)', '2021-03-12', '3.50', '2021-06-26 15:47:15', '2021-06-26 15:48:21'),
(29, 10, 'Minnesota State Mankato(Kicking)', '2021-03-23', '3.00', '2021-06-26 15:48:09', '2021-06-26 15:48:09'),
(30, 11, 'National Kicking Rankings(kicker )', '2021-01-02', '5.00', '2021-06-27 09:51:29', '2021-06-27 09:51:29'),
(31, 12, 'Kohls', '2021-01-01', '4.50', '2021-06-27 15:09:04', '2021-06-27 15:09:04'),
(32, 12, 'Sailer Kicking', '2021-03-02', '4.50', '2021-06-27 15:09:52', '2021-06-27 15:09:52'),
(33, 13, 'National Kicking Rankings:', '2021-01-01', '3.00', '2021-06-27 15:15:56', '2021-06-27 15:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freecredit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_O_Birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checktype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'User',
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `Username`, `freecredit`, `email`, `D_O_Birth`, `checktype`, `profile_img`, `email_verified_at`, `password`, `remember_token`, `type`, `state`, `user_balance`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', NULL, NULL, 'admin@msladygamble.com', NULL, NULL, NULL, NULL, '$2y$10$l0tswgrEhm1htd2dHDtbX.wN.H8zTKz.HipauG5udg5rtudvUXDWm', NULL, 'Admin', NULL, NULL, '0', '2021-05-28 05:26:58', '2021-06-27 10:22:23'),
(2, 'ms', 'lady', 'mslady', NULL, 'mslady@gmail.com', '2022-03-22', NULL, NULL, NULL, '$2y$10$9zO8vm4vxyZwBAKyPFUWpeZBjw6vUWpKOQrG9wzMg//4XAMMkHN6S', NULL, 'User', 'test', NULL, '2', '2022-08-20 18:48:54', '2022-12-20 12:25:05'),
(3, 'fred', 'Mccarthy', 'bosurit', NULL, 'fredaston49@gmail.com', '1997-01-04', NULL, NULL, NULL, '$2y$10$cIAoN6a1ehFENpSaDfBsyOSRbF615FnK6bn5NR9vVilWIU//jwSaa', NULL, 'User', '771', '1001', '2', '2022-08-31 13:50:54', '2022-12-20 17:45:18'),
(4, 'James', 'albert', 'Jamesalbert', NULL, 'iamjamesalbertt@gmail.com', '2022-02-02', '1', NULL, NULL, '$2y$10$1lCaXRqj5oxBpG3S0h30wOT1FbeyzR3zVnVggYNTbZuxq7JACCOeS', 'WPrBDDQxa8604aBwcAfhBKX9uXJbXIZHol6NXfrA0S6PST8WS0nDuDpZ5xwb', 'User', 'Pierre', '20', '1', '2022-09-16 06:18:35', '2022-12-20 17:47:51'),
(21, 'test', 'test', NULL, NULL, 'djoy62471@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$nGGApNtsO0zgJ0lxI9K2GuCBAlWutIWC2WTQOxJ.R.UeGzgK0F2dC', NULL, 'User', NULL, '1054', '2', '2022-09-20 23:51:03', '2022-12-20 13:57:33'),
(22, 'Rose', 'Houghtaling', 'clapton28', NULL, 'clapton28@hotmail.com', '2022-09-21', '1', NULL, NULL, '$2y$10$gXiIbyctZ5g2yr3ZhT4HwO5ZXRAjxnwD5AIgQHLEaNaqjbSRhKb0O', NULL, 'User', 'FL', NULL, '1', '2022-09-22 10:13:21', '2022-09-22 10:13:21'),
(23, 'Kasey', 'Penny', 'KaseyP', NULL, 'pennykasey@gmail.com', '1980-02-22', '1', NULL, NULL, '$2y$10$RerGOnNYVCkJHISkhwU2Q.tL8AbNQJI0xaXQXrODE3YrKa6cNQo8a', NULL, 'User', 'Ohio', NULL, '1', '2022-09-22 13:25:30', '2022-09-22 13:25:30'),
(24, 'Thomas', 'Brubaker', 'XOfrankie415', NULL, 'sayuluvmoji@icloud.com', '1996-03-08', '1', NULL, NULL, '$2y$10$hNZdrgd88uFSswh57gT5yemh6CNSeH/EZIgIXJFInq4D2FBF.EfGa', NULL, 'User', 'California', NULL, '1', '2022-09-24 01:37:40', '2022-09-24 01:37:40'),
(25, 'Juan', 'Villarreal', 'Juani0619', NULL, 'juanit061911@outlook.com', '1980-08-28', '1', NULL, NULL, '$2y$10$hCmKMHX12Pvf3jM1AaLRCufxvmbvleqtVuGPGK4PG8TwOYoUL2ZkG', NULL, 'User', 'Ca', NULL, '1', '2022-10-06 06:28:55', '2022-10-06 06:28:55'),
(26, 'Savannah', 'Pritchett', 'Savagesavvy', NULL, 'savannahelise47@gmail.com', '1994-03-05', '1', NULL, NULL, '$2y$10$HisTNHVmh4M0T.M5sCTZnuo1ZZskioKc3Ol2FAIXRKaP4rQdCQOm2', NULL, 'User', 'CA', NULL, '1', '2022-10-09 10:07:16', '2022-10-09 10:07:16'),
(27, 'April', 'Brown', 'Aprilb393', NULL, 'aprilb393@gmail.com', '1986-04-04', '1', NULL, NULL, '$2y$10$KxPpEbQc.yEPJNrzopMJGe3IoaWOnoLqpQ8Iv8aiZ2n.kaXeFwvjS', NULL, 'User', 'TX', NULL, '1', '2022-10-10 07:27:31', '2022-10-10 07:27:31'),
(28, 'Tykeria', 'Poullard', 'Tykpoullard', NULL, 'tykeriapoullard99@gmail.com', '1999-04-12', '1', NULL, NULL, '$2y$10$slENWybTyhJ5NflDatMmKuQeWXUoNwQ8AbGBf6iMnTzml56e4XUEq', NULL, 'User', 'Texas', NULL, '1', '2022-10-10 08:30:04', '2022-10-10 08:30:04'),
(29, 'Jacinth', 'Conti', 'Jconti213', NULL, 'buddyconti430@gmail.com', '1987-12-26', '1', NULL, NULL, '$2y$10$6qju0mcdxZ5l6gR4ehjNIu7PZZaHp2.mkdGMsuZWH.7WkftidyOFG', NULL, 'User', 'FL', NULL, '1', '2022-10-16 16:27:29', '2022-10-16 16:27:29'),
(30, 'Adrianna', 'escalante', 'Adrilocs', NULL, 'adriescalante700@gmail.com', '2022-10-16', '1', NULL, NULL, '$2y$10$KV.sHXtMv/B79ikhXAAhGOCpqVaTi9ZH0JdlRxTGA4gOO75Arjt6a', NULL, 'User', 'Ca', NULL, '1', '2022-10-17 10:56:32', '2022-10-17 10:56:32'),
(31, 'Cindy', 'Queen', 'Queenofdenial2', NULL, 'queenofdenial7274@gmail.com', '1972-07-27', '1', NULL, NULL, '$2y$10$2NrDrIgpLzh/RHhESu2IuOXza1csDl1a0OQ30TEs75.uzlr4wjYPm', NULL, 'User', 'PA', NULL, '1', '2022-10-18 05:04:30', '2022-10-18 05:04:30'),
(32, 'Amber', 'Benedict', 'Amber_rs22', NULL, 'paypalonly211@gmail.com', '1973-05-01', '1', NULL, NULL, '$2y$10$Z9R01YJqH9VO1h0uZvSeAeQ/7B5xIol7cy3eFkHZ/QuuMh92FXUxa', NULL, 'User', 'Nv', NULL, '1', '2022-10-20 06:56:19', '2022-10-20 06:56:19'),
(33, 'john', 'Kane', 'Tarppee', NULL, 'tarponssc@gmail.com', '1983-08-21', '1', NULL, NULL, '$2y$10$QGpafxk/f94GqFBlkiwmIuvHHTgpqeXFAhIgFWX/iXbS6ADzwYWUu', NULL, 'User', 'Florida', NULL, '1', '2022-10-21 22:58:30', '2022-10-21 22:58:30'),
(34, 'Yvonne', 'Ballard', 'ybueno', NULL, 'ballard.yvonne@yahoo.com', '2022-10-22', '1', NULL, NULL, '$2y$10$13tPh3U2BCbkMMwGiYcX3ukJ2LvRsSCqXSMHW5oY4ll6JGO1PK1Eq', NULL, 'User', 'California', NULL, '1', '2022-10-23 13:28:43', '2022-10-23 13:28:43'),
(35, 'CeeCee', 'Lujan', 'KrayCee', NULL, 'Ceeceelujan@gmail.com', '2022-11-19', '1', NULL, NULL, '$2y$10$l/JFjCTznEV0OOxjL5HaU.Q8glnosSuuHmtJlas/biFi5HjvNriC.', NULL, 'User', 'Tx', NULL, '1', '2022-11-19 16:53:20', '2022-11-19 16:53:20'),
(36, 'Shelby', 'Tonti', 'Coinfairy', NULL, 'shelby.tonti@gmail.com', '1977-03-15', '1', NULL, NULL, '$2y$10$S/uvOojiLDbzyxUwXfQeKux0.hb4JRqrqhR0TdcX7jeRWVbUh9d8m', NULL, 'User', 'PA', NULL, '1', '2022-11-29 05:43:21', '2022-11-29 05:43:21'),
(37, 'Lasynda', 'Takapu', 'Syn21', NULL, 'Ltakapu@gmail.com', '1983-11-21', '1', NULL, NULL, '$2y$10$JWIEE3CB57TFJmqyoEqHXuA6x97mHtqGOFoXnsgwQMF9vh0kJtXZi', NULL, 'User', 'CA', NULL, '1', '2022-12-16 10:57:58', '2022-12-16 10:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_coupons`
--

CREATE TABLE `user_coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_coupons`
--

INSERT INTO `user_coupons` (`id`, `user_id`, `coupon_id`, `created_at`, `updated_at`) VALUES
(1, 30, 1, '2022-01-13 03:41:39', '2022-01-13 03:41:39'),
(2, 30, 1, '2022-01-13 03:51:57', '2022-01-13 03:51:57'),
(3, 30, 1, '2022-01-13 04:08:43', '2022-01-13 04:08:43'),
(4, 30, 1, '2022-01-13 04:53:36', '2022-01-13 04:53:36'),
(5, 29, 1, '2022-01-13 05:20:28', '2022-01-13 05:20:28'),
(6, 29, 1, '2022-01-13 05:55:16', '2022-01-13 05:55:16'),
(7, 29, 1, '2022-01-13 06:04:39', '2022-01-13 06:04:39'),
(8, 29, 2, '2022-01-14 05:48:22', '2022-01-14 05:48:22'),
(9, 29, 1, '2022-01-14 05:50:35', '2022-01-14 05:50:35'),
(10, 29, 1, '2022-01-14 22:12:44', '2022-01-14 22:12:44'),
(11, 29, 3, '2022-01-14 22:35:50', '2022-01-14 22:35:50'),
(12, 29, 3, '2022-01-14 23:18:11', '2022-01-14 23:18:11'),
(13, 29, 3, '2022-01-14 23:21:09', '2022-01-14 23:21:09'),
(14, 29, 3, '2022-01-14 23:21:43', '2022-01-14 23:21:43'),
(15, 29, 1, '2022-01-15 00:21:48', '2022-01-15 00:21:48'),
(16, 29, 1, '2022-01-15 01:05:00', '2022-01-15 01:05:00'),
(17, 29, 2, '2022-01-15 01:05:00', '2022-01-15 01:05:00'),
(18, 29, 3, '2022-01-15 01:05:00', '2022-01-15 01:05:00'),
(19, 29, 1, '2022-01-15 02:35:37', '2022-01-15 02:35:37'),
(20, 29, 2, '2022-01-15 02:35:37', '2022-01-15 02:35:37'),
(21, 29, 1, '2022-01-15 02:44:41', '2022-01-15 02:44:41'),
(22, 29, 3, '2022-01-15 02:47:28', '2022-01-15 02:47:28'),
(23, 29, 1, '2022-01-15 02:50:15', '2022-01-15 02:50:15'),
(24, 29, 1, '2022-01-15 02:52:48', '2022-01-15 02:52:48'),
(25, 29, 1, '2022-01-15 02:56:53', '2022-01-15 02:56:53'),
(26, 29, 2, '2022-01-15 03:03:38', '2022-01-15 03:03:38'),
(27, 29, 3, '2022-01-15 04:34:44', '2022-01-15 04:34:44'),
(28, 29, 1, '2022-01-15 04:35:37', '2022-01-15 04:35:37'),
(29, 29, 1, '2022-01-15 04:36:54', '2022-01-15 04:36:54'),
(30, 29, 1, '2022-01-15 04:37:50', '2022-01-15 04:37:50'),
(31, 29, 1, '2022-01-15 04:40:28', '2022-01-15 04:40:28'),
(32, 29, 1, '2022-01-15 04:40:57', '2022-01-15 04:40:57'),
(33, 29, 2, '2022-01-15 04:41:48', '2022-01-15 04:41:48'),
(34, 29, 1, '2022-01-15 05:01:50', '2022-01-15 05:01:50'),
(35, 29, 1, '2022-01-15 05:04:19', '2022-01-15 05:04:19'),
(36, 29, 2, '2022-01-15 05:04:19', '2022-01-15 05:04:19'),
(37, 29, 3, '2022-01-15 05:08:46', '2022-01-15 05:08:46'),
(38, 29, 1, '2022-01-15 05:56:03', '2022-01-15 05:56:03'),
(39, 29, 1, '2022-01-16 03:19:15', '2022-01-16 03:19:15'),
(40, 29, 3, '2022-01-16 03:23:19', '2022-01-16 03:23:19'),
(41, 29, 1, '2022-01-16 03:25:27', '2022-01-16 03:25:27'),
(42, 29, 1, '2022-01-16 03:25:42', '2022-01-16 03:25:42'),
(43, 29, 1, '2022-01-19 22:01:13', '2022-01-19 22:01:13'),
(44, 29, 1, '2022-01-19 22:34:21', '2022-01-19 22:34:21'),
(45, 29, 2, '2022-01-19 22:34:21', '2022-01-19 22:34:21'),
(46, 29, 3, '2022-01-19 22:43:50', '2022-01-19 22:43:50'),
(47, 28, 1, '2022-01-20 03:02:08', '2022-01-20 03:02:08'),
(48, 28, 1, '2022-01-20 03:03:49', '2022-01-20 03:03:49'),
(49, 28, 1, '2022-01-20 03:05:07', '2022-01-20 03:05:07'),
(50, 31, 2, '2022-01-20 03:33:01', '2022-01-20 03:33:01'),
(51, 31, 2, '2022-01-20 03:39:32', '2022-01-20 03:39:32'),
(52, 31, 4, '2022-01-23 00:16:31', '2022-01-23 00:16:31'),
(53, 28, 4, '2022-01-23 23:24:57', '2022-01-23 23:24:57'),
(54, 28, 4, '2022-01-23 23:25:12', '2022-01-23 23:25:12'),
(55, 28, 4, '2022-01-23 23:28:20', '2022-01-23 23:28:20'),
(56, 28, 4, '2022-01-23 23:57:19', '2022-01-23 23:57:19'),
(57, 28, 4, '2022-01-24 00:16:55', '2022-01-24 00:16:55'),
(58, 28, 4, '2022-01-24 00:17:15', '2022-01-24 00:17:15'),
(59, 28, 4, '2022-01-24 00:18:39', '2022-01-24 00:18:39'),
(60, 28, 4, '2022-01-24 00:19:38', '2022-01-24 00:19:38'),
(61, 28, 4, '2022-01-24 05:00:55', '2022-01-24 05:00:55'),
(62, 29, 4, '2022-01-24 05:55:36', '2022-01-24 05:55:36'),
(63, 29, 2, '2022-01-24 05:56:44', '2022-01-24 05:56:44'),
(64, 29, 3, '2022-01-24 06:10:24', '2022-01-24 06:10:24'),
(65, 29, 4, '2022-01-24 06:31:00', '2022-01-24 06:31:00'),
(66, 29, 2, '2022-01-24 06:31:00', '2022-01-24 06:31:00'),
(67, 29, 3, '2022-01-24 06:31:00', '2022-01-24 06:31:00'),
(68, 29, 4, '2022-01-26 21:05:16', '2022-01-26 21:05:16'),
(69, 29, 2, '2022-01-26 21:05:16', '2022-01-26 21:05:16'),
(70, 29, 3, '2022-01-26 21:05:16', '2022-01-26 21:05:16'),
(71, 32, 5, '2022-01-27 00:54:26', '2022-01-27 00:54:26'),
(72, 32, 2, '2022-01-27 00:54:26', '2022-01-27 00:54:26'),
(73, 32, 3, '2022-01-27 00:54:26', '2022-01-27 00:54:26'),
(74, 32, 6, '2022-01-27 00:58:12', '2022-01-27 00:58:12'),
(75, 31, 4, '2022-01-27 02:04:35', '2022-01-27 02:04:35'),
(76, 31, 6, '2022-01-27 02:04:35', '2022-01-27 02:04:35'),
(77, 31, 2, '2022-01-27 02:07:52', '2022-01-27 02:07:52'),
(78, 31, 6, '2022-01-27 02:07:52', '2022-01-27 02:07:52'),
(79, 31, 3, '2022-01-27 02:07:52', '2022-01-27 02:07:52'),
(80, 31, 4, '2022-01-28 03:15:39', '2022-01-28 03:15:39'),
(81, 31, 7, '2022-01-28 03:31:39', '2022-01-28 03:31:39'),
(82, 36, 11, '2022-02-27 20:26:19', '2022-02-27 20:26:19'),
(83, 36, 11, '2022-02-27 20:31:28', '2022-02-27 20:31:28'),
(84, 36, 9, '2022-02-27 21:20:26', '2022-02-27 21:20:26'),
(85, 36, 9, '2022-02-27 22:47:57', '2022-02-27 22:47:57'),
(86, 3, 9, '2022-03-02 18:25:37', '2022-03-02 18:25:37'),
(87, 3, 10, '2022-03-02 18:29:02', '2022-03-02 18:29:02'),
(88, 3, 9, '2022-03-03 14:42:06', '2022-03-03 14:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_videos`
--

CREATE TABLE `user_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_videos`
--

INSERT INTO `user_videos` (`id`, `user_id`, `title`, `category`, `link`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 'asdadas', 'HUDL', 'dasdasd', '8HklX6H9gd.png', '2021-05-29 08:40:43', '2021-05-29 08:40:50'),
(9, 2, 'Camp', 'CAMP', '1x12e12zw2', 'AK2LR6SZlb.png', '2021-05-30 05:36:16', '2021-05-30 05:36:16'),
(10, 2, 'Training', 'TRAINING', 'asdqm1io23je180', 'ViLomMCHv1.png', '2021-05-30 05:36:32', '2021-05-30 05:36:39'),
(11, 4, 'Hudl video', 'HUDL', 'asd', 'SnIrR8ibWV.png', '2021-05-31 08:20:42', '2021-05-31 08:20:42'),
(12, 8, 'test', 'CAMP', 'https://youtu.be/oG-LHT21L3o', NULL, '2021-06-24 18:19:30', '2021-06-24 18:19:30'),
(13, 8, 'test', 'TRAINING', 'https://youtu.be/oG-LHT21L3o', NULL, '2021-06-24 18:23:02', '2021-06-24 18:23:02'),
(14, 8, '#5 Ranked Punter in America // Jackson Smith // Class of 2022', 'CAMP', 'https://www.youtube.com/embed/oG-LHT21L3o', NULL, '2021-06-24 18:24:17', '2021-06-24 18:24:17'),
(15, 10, 'Freshman Season 2020', 'HUDL', '//www.hudl.com/embed/video/3/15023956/5facec61bd6afc04d04f28ca', NULL, '2021-06-26 16:12:15', '2021-06-26 16:37:13'),
(16, 10, '2020 K/P Highlights', 'HUDL', '//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e', NULL, '2021-06-26 16:16:58', '2021-06-26 16:38:37'),
(17, 10, 'Eldon De Avila', 'CAMP', 'https://www.youtube.com/embed/c8xc8-pp8d0', NULL, '2021-06-26 16:18:26', '2021-06-26 16:40:23'),
(18, 10, 'Eldon De Avila | 2024 8th Grade Kicker Punter', 'CAMP', 'https://www.youtube.com/embed/zPRxYYkuK58', NULL, '2021-06-26 16:43:20', '2021-06-26 16:43:20'),
(19, 10, 'Eldon De Avila | 2024 MN Freshman | Punter', 'CAMP', 'https://www.youtube.com/embed/5jaU_bZQt4s', NULL, '2021-06-26 16:43:58', '2021-06-26 16:43:58'),
(20, 11, 'Kicking In Snow/ State Champ', 'HUDL', '//www.hudl.com/embed/video/3/10042388/5fd3cc775b3cdc0afcdaa7c9', NULL, '2021-06-27 09:56:21', '2021-06-27 09:56:21'),
(21, 11, 'Punting Highlights', 'HUDL', '//www.hudl.com/embed/video/3/10042388/5fdffc60b3d27c10f47b9852', NULL, '2021-06-27 09:57:36', '2021-06-27 09:57:36'),
(22, 11, '2020 Defensive Highlights', 'HUDL', '//www.hudl.com/embed/video/3/10042388/5fcc030764ea1b0570a97771', NULL, '2021-06-27 09:58:16', '2021-06-27 09:58:16'),
(23, 11, 'Connor Reynolds | 2021 MN Senior', 'CAMP', 'https://www.youtube.com/embed/MOCmtY56AGw', NULL, '2021-06-27 10:00:15', '2021-06-27 10:00:15'),
(25, 13, 'Sophomore Longsnapping Highlights', 'HUDL', '//www.hudl.com/embed/video/3/12738558/5fa9fa4a578dac1518428f7b', NULL, '2021-06-27 15:17:12', '2021-06-27 15:17:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gametypes`
--
ALTER TABLE `gametypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeems`
--
ALTER TABLE `redeems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `star_ratings`
--
ALTER TABLE `star_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_coupons`
--
ALTER TABLE `user_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_videos`
--
ALTER TABLE `user_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gametypes`
--
ALTER TABLE `gametypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `redeems`
--
ALTER TABLE `redeems`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `star_ratings`
--
ALTER TABLE `star_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_coupons`
--
ALTER TABLE `user_coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `user_videos`
--
ALTER TABLE `user_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
