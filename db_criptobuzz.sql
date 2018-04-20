-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 05:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_criptobuzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cripto_article`
--

CREATE TABLE `cripto_article` (
  `article_id` int(10) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `maincategory_id` int(2) NOT NULL,
  `category_id` int(2) DEFAULT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_seo` text NOT NULL,
  `article_desc` text NOT NULL,
  `article_image` text NOT NULL,
  `article_read` int(10) DEFAULT '0',
  `article_post` datetime NOT NULL,
  `article_feature` int(1) NOT NULL DEFAULT '1' COMMENT '1=No, 2=Yes',
  `article_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_article`
--

INSERT INTO `cripto_article` (`article_id`, `user_username`, `maincategory_id`, `category_id`, `article_title`, `article_seo`, `article_desc`, `article_image`, `article_read`, `article_post`, `article_feature`, `article_update`) VALUES
(1, 'admin', 1, NULL, 'Taiwan Eyes November Deadline for Bitcoin AML Regulation', 'taiwan-eyes-november-deadline-for-bitcoin-aml-regulation', '<p>Taiwan aims to formally regulate bitcoin under anti-money laundering (AML) rules before the end of the year.</p>\r\n\r\n<p>According to the <a href=\"http://www.cna.com.tw/news/firstnews/201804200133-1.aspx\" target=\"_blank\">Taiwan Central News Agency</a>, Chiu Tai-san, the country&#39;s minister of justice, said at an anti-money laundering event on Friday that the nation aims to have the legal framework ready before a visit to Taiwan by the Asia Pacific Group on Money Laundering in November.</p>\r\n\r\n<p>Set to visit the country for a bilateral evaluation of existing AML efforts, according to the report, the group is an inter-governmental agency for the Asia Pacific region that works in a similar capacity to its global counterpart, the Financial Action Task Force (<a href=\"https://www.coindesk.com/tag/fatf/\" target=\"_blank\">FATF</a>).</p>\r\n\r\n<p>Wellington Koo, chairman of Taiwanese financial watchdog, the Financial Supervisory Commission (FSC), who was also present at the event today, commented that the current problem with bitcoin is \"who has purchased it and who it is sold to.\"</p>\r\n\r\n<p> </p>\r\n\r\n<p>The remarks come soon after a previous <a href=\"https://www.coindesk.com/taiwan-moves-to-capture-bitcoin-under-money-laundering-laws/\" target=\"_blank\">report</a> indicating Taiwan&#39;s justice department has already started a conversation with other regulators and industry players on the best way to capture bitcoin under AML rules and bring more transparency to cryptocurrency trading in the country.</p>\r\n\r\n<p>According to the news report, banks in Taiwan have already been ordered by the FSC to label bank accounts offered to bitcoin trading platforms as \"high risk clients.\" Further, transactions through these accounts above a certain threshold are required to be flagged to the regulator in a bid to prevent potential money-laundering.</p>\r\n\r\n<p><em><a href=\"https://www.youtube.com/watch?v=X3h4crg1Ie4\" target=\"_blank\">Chiu Tai-san</a> image via YouTube</em></p>', 'Article_taiwan-eyes-november-deadline-for-bitcoin-aml-regulation_1524229549.jpg', 0, '2018-04-20 20:05:49', 2, '2018-04-20 20:05:49'),
(2, 'admin', 3, 10, 'Ideas Abound for Business Blockchains, But Who&#039;s Going to Pay?', 'ideas-abound-for-business-blockchains-but-who039s-going-to-pay', '', 'Article_ideas-abound-for-business-blockchains-but-who039s-going-to-pay_1524229917.jpg', 0, '2018-04-20 20:11:57', 2, '2018-04-20 20:11:57'),
(3, 'admin', 3, 11, 'Police Abruptly Halt Chinese Blockchain Conference', 'police-abruptly-halt-chinese-blockchain-conference', '<p>The Slavic god of lightning, Perun, is entering the ethereum ecosystem &#40;in spirit at least&#41;.</p>\r\n\r\n<p>Inspired by bitcoin&#39;s <a href=\"https://www.coindesk.com/information/what-is-the-lightning-network/\">lightning network</a>, a group of researchers hailing from Warsaw have unveiled <a href=\"https://ethresear.ch/t/perun-virtual-payment-and-state-channel-networks/1685\" target=\"_blank\">a new white paper</a> entitled \"Foundations of State Channel Networks,\" which outlines a protocol designed to help ethereum scale to support higher volumes of more complex <a href=\"https://www.coindesk.com/information/ethereum-smart-contracts-work/\">smart contracts</a>.</p>\r\n\r\n<p>But while a number of ethereum projects are building solutions for this problem, Perun&#39;s approach to its protocol is unique - namely in its focus on security, as it provides formal security definitions and security proofs for its protocol.</p>\r\n\r\n<p>Essentially, Perun works like other \"state channels\" that aim to move transactions off of the blockchain. However, the difference here is that parties involved can register the current state of the contract at any time on the blockchain, enabling smart contracts to rewind channels to the last state at which parties agreed on terms.</p>\r\n\r\n<p> </p>\r\n\r\n<p>\"In case when two (possibly malicious) parties send conflicting states to the channel contract, the logic of the contract will select the latest state on which both users have agreed on,\" the paper reads.</p>\r\n\r\n<p>An incremental innovation perhaps, but one University of Warsaw associate professor Stefan Dziembowski, a co-author of the paper, argues can&#39;t be undersold given the nature of value transfers.</p>\r\n\r\n<p>He told CoinDesk:</p>\r\n\r\n<blockquote>\r\n<p>\"We are convinced that in the context of cryptocurrencies, a sound security analysis is of particular importance because security flaws have a direct monetary value and hence, unlike in many other settings, are guaranteed to be exploited.\"</p>\r\n</blockquote>\r\n\r\n<p>It turns out, this is such a highly sought-after goal that the researchers are already partnering with tech giant Bosch to put together a prototype. Not only that, but the project has been lauded by ethereum creator Vitalik Buterin.</p>\r\n\r\n<p>In fact, Buterin was actually the first to <a href=\"https://ethresear.ch/t/perun-virtual-payment-and-state-channel-networks/1685\" target=\"_blank\">praise the idea</a>, positing that the security proofs the team had implemented were a step in the right direction for the ecosystem overall, and should be studied, if not adopted, by scaling projects of all kinds.</p>\r\n\r\n<p>\"I definitely do think that we need some kind of general-purpose machinery for formally verifying properties of layer-two systems in general,\" Buterin said.</p>\r\n\r\n<h2>Journey to state</h2>\r\n\r\n<p>Stepping back, though, the team&#39;s path to Perun was a bit meandering.</p>\r\n\r\n<p>Dziembowski told CoinDesk he and the team originally wanted to build a \"fair\" file-sharing app on top of ethereum but were tripped up by critical issues soon into the process of developing that app.</p>\r\n\r\n<p>\"While working on this project we noticed that a fundamental bottleneck to make our application work was high costs from on-chain transactions and the relatively slow time of processing smart contracts running on the blockchain,\" Dziembowski said.</p>\r\n\r\n<p>This is exactly what other developers have experienced, most famously when the digital cat collectables app <a href=\"https://www.coindesk.com/cat-fight-ethereum-users-clash-cryptokitties-congestion/\">CryptoKitties emerged</a> as a user favorite, causing these slow transaction times and high fees. A handful of scaling solutions have been put forth to the ethereum community since then, but the team at Perun actually found their inspiration from a different network altogether.</p>\r\n\r\n<p>It was bitcoin&#39;s lightning network, another \"layer-two solution\" for the bitcoin blockchain, that piqued their interest, and the team moved to rework it a bit to be able to function on ethereum&#39;s more ambitious platform.</p>\r\n\r\n<p>Luckily others had already started building on that idea through a technology known as \"state channels\" - whereby lightning is extended to ethereum&#39;s complex smart contracts. As such, Perun&#39;s paper merely continues this research by formulating a specification that outlines a bunch of requirements that any actual state channel implementation needs to secure itself against \"powerful adversaries.\"</p>\r\n\r\n<h2>Toward reality?</h2>\r\n\r\n<p>That said, the Perun team and even Buterin understand that there&#39;s still a long way to go.</p>\r\n\r\n<p>Dziembowski said that his team&#39;s prototype isn&#39;t ready for live use yet, but is \"mainly for research purposes\" now. And Buterin said he&#39;s worried about the future \"risk of error\" as the theory is put into practice with real smart contract code.</p>\r\n\r\n<p>Speaking to those risks, Dziembowski <a href=\"https://www.coindesk.com/hard-fork-ethereum-dao/\">named The DAO</a>, an ethereum-based organization that was supposed to rely only on code but ended up defunct after users were hacked for more than $50 million of ether, as an example of what, and how much, can go wrong.</p>\r\n\r\n<p>Still, many are excited about the effort.</p>\r\n\r\n<p>Buterin even said he has plans to come up with a similar security framework for <a href=\"https://www.coindesk.com/ethereum-lightning-buterin-poon-unveil-plasma-scaling-plan/\">Plasma</a>, a highly-anticipated scaling project he co-authored last year and which startups like OmiseGo are now putting into practice.</p>\r\n\r\n<p>Speaking about Perun&#39;s work, Buterin continued:</p>\r\n\r\n<blockquote>\r\n<p>\"I personally am satisfied that it&#39;s fundamentally possible to achieve all of the things that you claim in the way that you&#39;re doing it.\"</p>\r\n</blockquote>\r\n\r\n<p>The research team responded to him saying that they&#39;re working on a simple implementation.</p>\r\n\r\n<p><em><a href=\"https://www.shutterstock.com/image-photo/abstract-light-tail-background-1044056869\" target=\"_blank\">Motion blur</a> image via Shutterstock</em></p>', 'Article_police-abruptly-halt-chinese-blockchain-conference_1524230023.jpg', 0, '2018-04-20 20:13:43', 2, '2018-04-20 20:36:39'),
(4, 'admin', 3, 12, 'Blockchain Slump? Banks May Be Fatigued But Insurers Are Pumped', 'blockchain-slump-banks-may-be-fatigued-but-insurers-are-pumped', '<p>Trust, but verify.</p>\r\n\r\n<p>Borrowed from a Russian writer, it&#39;s one of crypto&#39;s most widely embraced slogans, though one that&#39;s becoming even more relevant on social media, where <a href=\"https://www.coindesk.com/bitcoin-twitter-war-raging-no-account-safe/\">battling factions</a> bent on promoting the next great high-tech investment are now turning the very symbols meant to protect users against them.</p>\r\n\r\n<p>Whether it&#39;s an account impersonating the world&#39;s largest exchange or its most widely known tech visionaries, no company or individual is too sacred for a simple takedown that&#39;s spreading like wildfire, propelled by lax verification practices at name-brand social media giants.</p>\r\n\r\n<p>Still, it&#39;s perhaps \"crypto Twitter\" that&#39;s bearing the brunt of the criticism.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Armed with a photo ID, scammers are successfully duping Twitter into giving them a \"<a href=\"https://help.twitter.com/en/managing-your-account/about-twitter-verified-accounts\" target=\"_blank\">blue check mark</a>\" of authenticity so they can impersonate real individuals and entities, all in an effort to bilk users out of money.</p>\r\n\r\n<p>Take \"seifsbei,\" a verified account associated with freelance film producer and director Seif Elsbei, which was hacked and then<a href=\"https://www.coindesk.com/scam-twitter-account-impersonates-6-crypto-projects-in-3-days/\"> posed as the official account</a> of the verge cryptocurrency. The hacker didn&#39;t stop there, later posting messages as crypto exchange Bitfinex and ethereum creator Vitalik Buterin.</p>\r\n\r\n<p>The verified account \"Protafield\" displayed similar bad behavior in early April, briefly changing its name and account details to impersonate crypto exchanges to specifically stage fake ether giveaways.</p>\r\n\r\n<p>And these incidents display how crypto Twitter&#39;s current mess isn&#39;t likely to be saved merely by the blue check mark, or any other simple verification process.</p>\r\n\r\n<p>\"People at home see this as a stamp that Twitter sees this as a good account, which can be very subjective,\" said Tim Pastoor, founder of the Netherlands-based digital identity startup 2way.io.</p>\r\n\r\n<p>By vetting merely the identity behind the account, and not the intent, when issuing blue check marks, Twitter inadvertently makes scams even more dangerous, he continued.</p>\r\n\r\n<p>Speaking to the overall cat-and-mouse game many crypto companies are having to play on Twitter, a Bitfinex representative described curbing such efforts as almost a full-time job.</p>\r\n\r\n<p>A spokesperson told CoinDesk:</p>\r\n\r\n<blockquote>\r\n<p>\"We dedicate a lot of resources towards combating illegitimate Twitter accounts and educating our users on how to spot them. However, our impact on certain sites is limited.\"</p>\r\n</blockquote>\r\n\r\n<h2>Fickle reputations</h2>\r\n\r\n<p>There are several patterns that complicate the trouble with crypto Twitter.</p>\r\n\r\n<p>For one, scammers have quickly learned to use highly technical language to cloak misinformation in trusted terminology, said Nick Lucas, founder of the Los Angeles-based social media analysis startup CoinTrend. This means simple vocabulary lists and language analysis, processes Twitter and other social media sites use, won&#39;t be enough to weed out scams, he said.</p>\r\n\r\n<p>Yet, Pastoor pointed out that bots and spam accounts often promote tokens in packs, swarming to give each other good reputations and boost visibility, which could make it easier to spot systematic scams.</p>\r\n\r\n<p>However, it remains a tricky endeavour, and so Pastoor recommends that Twitter take a page from traditional psychology to help combat the problem.</p>\r\n\r\n<p>Most people trust their close friends more than acquaintances, so a layered approach to trust could offer some tools for filtering the noise. For example, a user may trust a coworker&#39;s friend more than a complete stranger, but less than a family member. Just as Facebook lets people control which people they see posts from - friends only, select groups or the public - Twitter could give users more control over who shows up in their feeds.</p>\r\n\r\n<p>\"There are definitely going to have to be iterations,\" Pastoor said. \"I would probably recommend starting with allowing people to filter based on people that they already trust, and to maybe make more use of your second or third-degree networks.\"</p>\r\n\r\n<p>Twitter declined to comment on any topic related to these events or policy changes in general, but Twitter CEO <a href=\"http://www.thehindu.com/sci-tech/technology/internet/jack-dorsey-says-twitter-verification-policy-system-broken/article20088089.ece\" target=\"_blank\">Jack Dorsey recently admitted</a> that the platform&#39;s verification system is broken.</p>\r\n\r\n<h2><strong>Changing hands</strong></h2>\r\n\r\n<p>The issue is made even more confusing by the fact that accounts can change hands among owners, not only through hacks, but also simple handovers, and those new owners may have different motives.</p>\r\n\r\n<p>For instance, what started much of the debates around Twitter&#39;s policies was the suspension of the \"@bitcoin\" Twitter handle.</p>\r\n\r\n<p>Before the bitcoin scaling debate came to a head last fall, with a significant contingent of enthusiasts splitting off the core bitcoin network to create bitcoin cash, the @bitcoin Twitter handle tweeted information in support of bitcoin. The account has been operated by many owners over the years, and the latest is an <a href=\"https://twitter.com/rogerkver/status/983379544387153920\" target=\"_blank\">anonymous bitcoin cash fan</a>.</p>\r\n\r\n<p>As such, the account became highly controversial, tweeting out incendiary comments aimed at Bitcoin Core developers and several other leading figures in the cryptocurrency community who were on their side. Many Core developers saw this as misleading, since the handle was tweeting out things Bitcoin Core, which a majority of users and businesses still see as the \"true\" bitcoin, didn&#39;t stand behind.</p>\r\n\r\n<p>Because of the outrage, Twitter briefly suspended the account and then stripped it of its blue check mark (the account is active again but no longer verified).</p>\r\n\r\n<p>Speaking to the debates that have plagued the leaderless tech community for some time, Sterlin Lujan, a bitcoin cash supporter and communications ambassador for <a href=\"http://bitcoin.com/\">Bitcoin.com</a>, told CoinDesk:</p>\r\n\r\n<blockquote>\r\n<p>\"These social media networks should not allow handles to be censored or shut down arbitrarily, just because a bunch of people do not like it.\"</p>\r\n</blockquote>\r\n\r\n<p>And while Twitter has said the blue check mark does not imply its approval or endorsement, Lujan contends, \"A person with a check mark has a stronger likelihood of appearing at the top of searches and feeds. What it boils down to is that Twitter verification processes need to be made more clear.\"</p>\r\n\r\n<h2>Market influencers</h2>\r\n\r\n<p>While Twitter&#39;s verification process is still uncertain, what remains clear is Twitter&#39;s impact on the cryptocurrency markets.</p>\r\n\r\n<p>Not only can scammers have a dire impact on user&#39;s crypto holdings, but even those earnestly voicing their interest in a certain crypto project can cause price swings. For instance, Lucas has seen a clear correlation between tweets from influential Twitter accounts and market volatility.</p>\r\n\r\n<p>\"There&#39;s basically a lot of influence on Twitter when John McAfee or someone mentions a specific coin,\" Lucas said.</p>\r\n\r\n<p>As an example, when McAfee tweeted about \"burst,\" a crypto token project focused on creating a \"greener\" mining process, on December 22, the price of the cryptocurrency <a href=\"https://coinmarketcap.com/currencies/burst/\" target=\"_blank\">quickly doubled</a>.</p>\r\n\r\n<p>A similar, albeit temporary, spike happened the previous week when McAfee tweeted about another crypto token project, <a href=\"https://coinmarketcap.com/currencies/safe-exchange-coin/\" target=\"_blank\">Safe Exchange Coins</a>. The day before McAfee&#39;s tweet, the cryptocurrency was selling for roughly a penny each, but within 24 hours of the tweet, the price doubled and by the following week, the coin briefly sold for more than $0.06.</p>\r\n\r\n<p>Some argue that when McAfee charges <a href=\"https://www.theverge.com/2018/4/2/17189880/john-mcafee-bitcoin-cryptocurrency-twitter-ico\" target=\"_blank\">$105,000 per tweet</a>, he&#39;s basically advertising for companies for a fee. However, he told CoinDesk it&#39;s not really advertising because he only promotes projects he truly believes in.</p>\r\n\r\n<p>Twitter chatter doesn&#39;t only drive prices up for new cryptocurrencies and crypto tokens, though. It can also have negative impacts as well.</p>\r\n\r\n<p>For example, Lucas has noticed that a lot of Twitter feuds about bitcoin code changes and technical updates correlate to price dips.</p>\r\n\r\n<p>\"If everyone is talking negatively about something that is getting pushed into a core repo coin, that can also have an impact. If someone with a big following tweets something, it can cause a scare,\" Lucas said, adding:</p>\r\n\r\n<blockquote>\r\n<p>\"There&#39;s a lot more influence coming from specific accounts, unlike, say, Reddit, which pushes more topics to be talked about rather than creating influence.\"</p>\r\n</blockquote>\r\n\r\n<p><em><a href=\"https://www.shutterstock.com/image-photo/san-francisco-ca-may-25-after-78049630?src=4RpOkUzAQ1-RRrtGuKf5RQ-1-60\" target=\"_blank\">Twitter account on computer screen</a> image via Shutterstock</em></p>', 'Article_blockchain-slump-banks-may-be-fatigued-but-insurers-are-pumped_1524230320.jpg', 0, '2018-04-20 20:18:40', 1, '2018-04-20 20:35:45'),
(7, 'admin', 1, 0, 'The Craigslist of Crypto Is Making Millions Where Bitcoin Is Needed Most', 'the-craigslist-of-crypto-is-making-millions-where-bitcoin-is-needed-most', '<p>$27 million.</p>\r\n\r\n<p>That&#39;s how much revenue LocalBitcoins is now generating annually off a business that started back in 2011, all with an investment of just a few thousand dollars. One of the longest-running and most controversial bitcoin companies, the decidedly low-fi website now has roughly 20 employees worldwide and 4 million registered accounts.</p>\r\n\r\n<p>And reflecting the global tide, 40 percent of those users have signed up in the last six months.</p>\r\n\r\n<p>All that is according to Nikolaus Kangas, the CEO of the company, who started the venture with his brother Jeremias at a time when there weren&#39;t many options outside meeting up face-to-face to trade bitcoin. But the online portal continues to thrive even as the landscape of polished VC-backed exchanges (and even bleeding-edge <a href=\"https://www.coindesk.com/changing-exchanges-will-coinbase-tomorrow-decentralized/\">decentralized alternatives</a>) matures.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Sure, the peer-to-peer marketplace accounts for only a sliver of worldwide bitcoin trading - last week, it handled <a href=\"https://coin.dance/volume/localbitcoins/ALL\" target=\"_blank\">$62 million in trades</a>, according to Coin.Dance estimates. This may be less than a top-20 exchange does <a href=\"https://coinmarketcap.com/exchanges/volume/24-hour/\" target=\"_blank\">in a day</a>, but the service is gaining traction in markets that are generally overlooked by mainstream providers.</p>\r\n\r\n<p>\"We are the most global platform out there,\" Kangas said. \"Our goal is to improve the global trade possibilities, to serve people who have limited access to financial services.\"</p>\r\n\r\n<p>And, it turns out, even though LocalBitcoins tends to be more expensive (since sellers set their own prices), the company is much needed.</p>\r\n\r\n<p>Indeed, Coin.Dance shows that <a href=\"https://coin.dance/volume/localbitcoins/VEF\" target=\"_blank\">Venezuelan </a>transactions spiked to a new all-time high this month, as did usage in <a href=\"https://coin.dance/volume/localbitcoins/TZS\" target=\"_blank\">Tanzania </a>and <a href=\"https://coin.dance/volume/localbitcoins/PEN\" target=\"_blank\">Peru</a> - all countries that are struggling to <a href=\"https://www.bnamericas.com/en/intelligence-series/banking/banking-in-peru-recovery-underway-but-politics-raise-doubts/\" target=\"_blank\">recover</a> from <a href=\"https://www.cnbcafrica.com/news/east-africa/2018/01/04/tanzanias-central-bank-revokes-licences-five-banks/\" target=\"_blank\">banking industry</a> slumps. During the peak week of April 14, LocalBitcoins&#39; trading volume in these three nations combined was worth roughly $55 million - more than six times the value of U.S. trading on LocalBitcoins in the same week.</p>\r\n\r\n<p>And when the <a href=\"https://www.coindesk.com/bank-of-montreal-expands-crypto-purchase-ban/\">Bank of Montreal </a>restricted customers from making cryptocurrency purchases, LocalBitcoins activity in Canada spiked.</p>\r\n\r\n<p>It&#39;s these instances that make LocalBitcoins so valuable, even in an environment where growing awareness of institutional traders and their high-value swaps (average transactions on LocalBitcoins are just $450) are stealing the limelight.</p>\r\n\r\n<p>And that&#39;s paid off. The peer-to-peer exchange, which charges a 1 percent transaction fee, took in more than €22 million (roughly $27.2 million) of revenues in 2017, more than triple the amount from 2016, according to Kangas.</p>\r\n\r\n<p>Despite the market dip since December, when bitcoin&#39;s price peaked at $19,783, he said trading volume has continued to grow.</p>\r\n\r\n<p>Nikolaus told CoinDesk:</p>\r\n\r\n<blockquote>\r\n<p>\"If you compare us to those big altcoin exchanges that were making $100 million per day or something like that last fall, we are kind of a small player. But I think we are solving a basic problem of how to buy or sell bitcoin for fiat currency.\"</p>\r\n</blockquote>\r\n\r\n<h2>Not always easy</h2>\r\n\r\n<p>And that basic problem was even more apparent in 2011 when the brothers first started in on the idea.</p>\r\n\r\n<p>Nikolaus, a Finnish programmer, was fascinated by bitcoin - a new stateless currency meant to take power away from the banks, and maybe even governments. But every website he went to that provided services for Finnish buyers was awful in that it was hard to use. The Kangas brothers wanted to change that.</p>\r\n\r\n<p>So having saved up a year&#39;s worth of living expenses and with a few thousand dollars to spend on server fees, the brothers launched LocalBitcoins.</p>\r\n\r\n<p>Yet, the journey for LocalBitcoins hasn&#39;t always been easy.</p>\r\n\r\n<p>The company has tested several products over the years, including a <a href=\"https://www.coindesk.com/localbitcoins-bitcoin-billing-merchants/\">merchant billing service</a> in 2014, but none of those gained traction like its bread and butter - P2P exchange.</p>\r\n\r\n<p>On top of that, LocalBitcoins was the platform in the middle of more than half a dozen <a href=\"https://www.coindesk.com/9-years-localbitcoins-trader-sentenced-latest-money-transmission-case/\">criminal cases</a> associated <a href=\"https://www.coindesk.com/detroit-bitcoin-trader-gets-jail-time-for-unlicensed-money-business/\">with LocalBitcoins traders</a>. For instance, last year, the U.S. Department of Justice sentenced a father-son duo of LocalBitcoins users, Michael and Randall Lord, to several years in prison for operating an unlicensed money transmission business.</p>\r\n\r\n<p>And <a href=\"https://www.reddit.com/r/localbitcoins/\" target=\"_blank\">Reddit is full</a> of testimonies about scammers and hackers exploiting inexperienced LocalBitcoins&#39; users.</p>\r\n\r\n<p>Nikolaus said the team is very concerned about criminal activity on the site and cooperates with authorities to investigate any crimes that use the platform.</p>\r\n\r\n<p>Yet, just like Craigslist horror stories haven&#39;t stopped people from using the internet marketplace, instances like these connected to LocalBitcoins haven&#39;t slowed the platform&#39;s usage. In fact, the $27.2 million in revenue LocalBitcoins took in last year was more than triple its profits from 2016.</p>\r\n\r\n<p>Even with bitcoin&#39;s recent price dip (after December highs close to $20,000 a coin), Nikolaus said trading volume continues to grow.</p>\r\n\r\n<h2>Compliance for a non-bank</h2>\r\n\r\n<p>That said, Nikolaus remains steadfast in his interest in staying on the right side of the law.</p>\r\n\r\n<p>\"We want to follow all the current regulations and laws, but right now it is quite unclear,\" he said.</p>\r\n\r\n<p>What is clear, though, is that at least in the U.S. the company has to report certain transactions as suspicious. This includes <a href=\"https://www.law.cornell.edu/cfr/text/31/1010.330\" target=\"_blank\">transactions over $10,000</a> and any transactions set up obviously to circumvent that limit.</p>\r\n\r\n<p>Everything else - complying with local regulations - is up to the buyer and seller.</p>\r\n\r\n<p>In this way, LocalBitcoins has set itself up to be only a technology provider and not a complicit party to any unlawful actions users of its technology might participate in. This outsourcing of compliance responsibility is one of the reasons the company has been able to stay afloat, even in the face of competition from well-funded startups.</p>\r\n\r\n<p>Because LocalBitcoins generally facilitates trades of smaller amounts, they rarely attract scrutiny.</p>\r\n\r\n<p>For instance, <a href=\"https://ag.ny.gov/press-release/ag-schneiderman-launches-inquiry-cryptocurrency-exchanges\" target=\"_blank\">when the Investor Protection Bureau</a> of the New York Attorney General&#39;s Office sent an inquiry letter this month to more than a dozen cryptocurrency exchanges, including Coinbase, Kraken, and Gemini - exchanges that function more like banks - P2P platforms like LocalBitcoins were notably absent from the dragnet.</p>\r\n\r\n<p>It seems it helps to be local.</p>\r\n\r\n<p>For example, Iranian blockchain researcher Ziya Sadr in Tehran routinely uses LocalBitcoins to sell cryptocurrency. Since sanctions keep Iranian banking customers from accessing foreign markets, he told CoinDesk, Iranian traders use LocalBitcoins to find local sellers who accept wire transfers from Iranian banks.</p>\r\n\r\n<p>As mentioned before, it&#39;s these kinds of markets, which are cut off from the rest of the world, that need P2P crypto exchanges like LocalBitcoins.</p>\r\n\r\n<p>Roman Snitko, CTO of a new P2P exchange called Hodl Hodl, noticed a similar trend on his platform. Russians, who lack centralized exchange options, were some of the first users to flock to Hodl Hodl.</p>\r\n\r\n<p>Speaking to this need, then, Snitko told CoinDesk:</p>\r\n\r\n<blockquote>\r\n<p>\"In countries without centralized exchanges, I think P2P trading will play a significant role.\"</p>\r\n</blockquote>\r\n\r\n<p><em><a href=\"https://scontent-ort2-2.xx.fbcdn.net/v/t31.0-8/1599553_722219967882598_5631953640413284470_o.png\" target=\"_blank\">LocalBitcoins image</a> via Shutterstock</em></p>', 'Article_the-craigslist-of-crypto-is-making-millions-where-bitcoin-is-needed-most_1524231055.jpg', 0, '2018-04-20 20:30:55', 1, '2018-04-20 20:30:55'),
(8, 'admin', 3, 10, 'Ideas Abound for Business Blockchains, But Who&#039;s Going to Pay?', 'ideas-abound-for-business-blockchains-but-who039s-going-to-pay', '<p>Bitcoin (BTC) saw small gains last night, but the weak move did little to further the bull case.</p>\r\n\r\n<p>The target resistance level to beat yesterday (long-term descending trendline) was $8,285. A high volume close (as per UTC) above that mark would have signaled a long-term bullish trend reversal.</p>\r\n\r\n<p>The daily chart below shows bitcoin closed yesterday at $8,273 on Bitfinex, meaning the breakout remained elusive. However, a new 24-hour candle (as per UTC) opened above the descending trendline support (seen today at $8,230), creating a false picture of a bullish breakout.</p>\r\n\r\n<h3>Daily chart</h3>\r\n\r\n<p><img alt=\"\" src=\"https://media.coindesk.com/uploads/2018/04/download-3-3.png\" xss=removed></p>\r\n\r\n<p> </p>\r\n\r\n<p>So, while it appears as though the bull breakout has happened, the move is more of a sideways breach (unconvincing breakout) of the long-term trendline hurdle.</p>\r\n\r\n<p>As such, the major level to watch out for on the high side is now $8,460 (April 15 high). A convincing move above that level would establish higher highs and higher lows pattern (bullish setup) and would likely confirm a longer-term bull reversal.</p>\r\n\r\n<p>The risks of a pullback are still high, given the unconvincing breakout. A failure to hold above the descending trendline support (former resistance) of $8,230 could yield a drop to $7,823 (April 17 low).</p>\r\n\r\n<p>The key levels to watch out for in the next day or two are resistance at $8,460 (April 15 high) and support at $7,823 (April 17 low).</p>\r\n\r\n<p>As of writing, BTC is changing hands at $8,310 on Bitfinex.</p>\r\n\r\n<p>View</p>\r\n\r\n<ul>\r\n <li>A daily close (as per UTC) above $8,460 would open up upside towards $9,000-$9,177 (March 21 high).</li>\r\n <li>A move below $7,823 would indicate the rally from the April. 1 low of $6,425 has ended and could yield a sell-off to $7,200-$7,000.</li>\r\n</ul>\r\n\r\n<p><em><a href=\"https://www.shutterstock.com/image-photo/bitcoin-crypto-currency-gold-btc-bit-772267789\" target=\"_blank\">Bitcoin</a> image via Shutterstock</em></p>', 'Article_ideas-abound-for-business-blockchains-but-who039s-going-to-pay_1524231438.jpg', 0, '2018-04-20 20:37:18', 1, '2018-04-20 20:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_category`
--

CREATE TABLE `cripto_category` (
  `category_id` int(2) NOT NULL,
  `maincategory_id` int(2) NOT NULL,
  `category_head` int(2) DEFAULT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_seo` text NOT NULL,
  `category_level` int(1) NOT NULL DEFAULT '0' COMMENT 'Level Menu',
  `category_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_category`
--

INSERT INTO `cripto_category` (`category_id`, `maincategory_id`, `category_head`, `category_name`, `category_seo`, `category_level`, `category_update`) VALUES
(6, 3, 0, 'INVESTMENT', 'investment', 0, '2018-04-17 22:50:33'),
(7, 3, 6, 'VENTURE CAPITAL', 'venture-capital', 1, '2018-04-17 22:50:48'),
(8, 3, 6, 'INITIAL COIN OFFERINGS', 'initial-coin-offerings', 1, '2018-04-17 22:51:19'),
(9, 3, 0, 'MARKETS', 'markets', 0, '2018-04-17 22:51:42'),
(10, 3, 9, 'BITCOIN', 'bitcoin', 1, '2018-04-17 22:51:58'),
(11, 3, 9, 'ETHEREUM', 'ethereum', 1, '2018-04-17 22:52:12'),
(12, 3, 9, 'EXCHANGES', 'exchanges', 1, '2018-04-17 22:52:24'),
(13, 3, 9, 'OTHER PUBLIC PROTOCOLS', 'other-public-protocols', 1, '2018-04-17 22:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_comment`
--

CREATE TABLE `cripto_comment` (
  `comment_id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `comment_desc` text NOT NULL,
  `comment_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cripto_contact`
--

CREATE TABLE `cripto_contact` (
  `contact_id` int(1) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_address` varchar(100) NOT NULL,
  `contact_phone` varchar(12) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `contact_image` varchar(100) NOT NULL,
  `contact_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_contact`
--

INSERT INTO `cripto_contact` (`contact_id`, `contact_name`, `contact_address`, `contact_phone`, `contact_email`, `contact_image`, `contact_update`) VALUES
(1, 'CRIPTOBUZZ.TODAY', 'HOUSE: 34/A, ROAD: 3/B NEW YORK, USA', '+921-3245-32', 'info@cripto.buzz.com', 'Contact_criptobuzztoday_1524061136.jpg', '2018-04-18 21:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_information`
--

CREATE TABLE `cripto_information` (
  `information_id` int(10) NOT NULL,
  `information_title` varchar(100) NOT NULL,
  `information_seo` text NOT NULL,
  `information_subtitle` varchar(100) NOT NULL,
  `information_desc` text NOT NULL,
  `information_icon` varchar(100) NOT NULL,
  `information_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_information`
--

INSERT INTO `cripto_information` (`information_id`, `information_title`, `information_seo`, `information_subtitle`, `information_desc`, `information_icon`, `information_update`) VALUES
(1, 'Bitcoin', 'bitcoin', '', '<h1>A Beginner&#39;s Guide to Blockchain Technology</h1>\r\n\r\n<p>Bitcoin is a digital currency that is being used increasingly all over the world since its inception in 2009. In the years since, many other assets and forms of blockchain technology have been developed. Find out more about bitcoin, ethereum, blockchains, and enterprise distributed ledger technology and how they are being used and evolving with our straightforward guides.</p>\r\n', '', '2018-04-18 21:43:16'),
(2, 'What is Bitcoin ?', 'what-is-bitcoin-', 'It&amp;#039;s a decentralized digital currency', '<p>To cut through some of the confusion surrounding bitcoin, we need to separate it into two components. On the one hand, you have bitcoin-the-token, a snippet of code that represents ownership of a digital concept - sort of like a virtual IOU. On the other hand, you have bitcoin-the-protocol, a distributed network that maintains a ledger of balances of bitcoin-the-token. Both are referred to as \"bitcoin.\"</p>\r\n\r\n<p>The system enables payments to be sent between users without passing through a central authority, such as a bank or payment gateway. It is created and held electronically. Bitcoins aren&#39;t printed, like dollars or euros - they&#39;re produced by computers all around the world, using free software.</p>\r\n\r\n<p>It was the first example of what we today call cryptocurrencies, a growing asset class that shares some characteristics of traditional currencies, with verification based on cryptography.</p>\r\n\r\n<p><img alt=\"Network, Globe\" src=\"https://media.coindesk.com/uploads/2018/01/shutterstock_667929118-728x546.jpg\"></p>\r\n\r\n<p><strong>Who created it?</strong></p>\r\n\r\n<p>A pseudonymous software developer going by the name of <a href=\"https://www.coindesk.com/information/who-is-satoshi-nakamoto/\">Satoshi Nakamoto</a> proposed bitcoin in 2008, as an electronic payment system based on mathematical proof. The idea was to produce a means of exchange, independent of any central authority, that could be transferred electronically in a secure, verifiable and immutable way.</p>\r\n\r\n<p>To this day, no-one knows who Satoshi Nakamoto really is.</p>\r\n\r\n<p><strong>In what ways is it different from traditional currencies?</strong></p>\r\n\r\n<p>Bitcoin can be used to pay for things electronically, if both parties are willing. In that sense, it&#39;s like conventional dollars, euros, or yen, which are also traded digitally.</p>\r\n\r\n<p>But it differs from fiat digital currencies in several important ways:</p>\r\n\r\n<p><strong>1 - Decentralization</strong></p>\r\n\r\n<p>Bitcoin&#39;s most important characteristic is that it is decentralized. No single institution controls the bitcoin network. It is maintained by a <a href=\"https://www.coindesk.com/bitcoin-core-roadmap-unveils-signature-optimization-plan/\">group of volunteer coders</a>, and run by an open network of dedicated computers spread around the world. This attracts individuals and groups that are uncomfortable with the control that banks or government institutions have over their money.</p>\r\n\r\n<p>Bitcoin solves the \"double spending problem\" of electronic currencies (in which digital assets can easily be copied and re-used) through an ingenious combination of cryptography and economic incentives. In electronic fiat currencies, this function is fulfilled by banks, which gives them control over the traditional system. With bitcoin, the integrity of the transactions is maintained by a distributed and open network, owned by no-one.</p>\r\n\r\n<p><strong>2 - Limited supply</strong></p>\r\n\r\n<p>Fiat currencies (dollars, euros, yen, etc.) have an unlimited supply - central banks can issue as many as they want, and can attempt to manipulate a currency&#39;s value relative to others. Holders of the currency (and especially citizens with little alternative) bear the cost.</p>\r\n\r\n<p>With bitcoin, on the other hand, the supply is tightly controlled by the underlying algorithm. A small number of <a href=\"https://www.coindesk.com/information/how-bitcoin-mining-works/\">new bitcoins</a> trickle out every hour, and will continue to do so at a diminishing rate until a maximum of 21 million has been reached. This makes bitcoin more attractive as an asset - in theory, if demand grows and the supply remains the same, the value will increase.</p>\r\n\r\n<p><strong>3 - Pseudonymity</strong></p>\r\n\r\n<p>While senders of traditional electronic payments are usually identified (for verification purposes, and to comply with anti-money laundering and other legislation), users of bitcoin in theory operate in semi-anonymity. Since there is no central \"validator,\" users do not need to identify themselves when sending bitcoin to another user. When a transaction request is submitted, the protocol checks all previous transactions to confirm that the sender has the necessary bitcoin as well as the authority to send them. The system does not need to know his or her identity.</p>\r\n\r\n<p>In practice, each user is identified by the address of his or her wallet. Transactions can, with some effort, be tracked this way. Also, <a href=\"https://www.coindesk.com/danish-police-claim-breakthrough-bitcoin-tracking/\">law enforcement</a> has developed methods to <a href=\"https://www.coindesk.com/irs-using-bitcoin-tracking-software-since-2015/\">identify users</a> if necessary.</p>\r\n\r\n<p>Furthermore, most exchanges are required by law to perform identity checks on their customers before they are allowed to buy or sell bitcoin, facilitating another way that bitcoin usage can be tracked. Since the network is transparent, the progress of a particular transaction is visible to all.</p>\r\n\r\n<p>This makes bitcoin not an ideal currency for criminals, terrorists or money-launderers.</p>\r\n\r\n<p><strong>4 - Immutability</strong></p>\r\n\r\n<p>Bitcoin transactions cannot be reversed, unlike electronic fiat transactions.</p>\r\n\r\n<p>This is because there is no central \"adjudicator\" that can say \"ok, return the money.\" If a transaction is recorded on the network, and if more than an hour has passed, it is impossible to modify.</p>\r\n\r\n<p>While this may disquiet some, it does mean that any transaction on the bitcoin network cannot be tampered with.</p>\r\n\r\n<p><strong>5 - Divisibility</strong></p>\r\n\r\n<p>The smallest unit of a bitcoin is called a satoshi. It is one hundred millionth of a bitcoin (0.00000001) - at today&#39;s prices, about one hundredth of a cent. This could conceivably enable microtransactions that traditional electronic money cannot.</p>\r\n\r\n<p>---</p>\r\n\r\n<p>Read more to find out <a href=\"https://www.coindesk.com/information/how-do-bitcoin-transactions-work/\">how bitcoin transactions are processed</a> and <a href=\"https://www.coindesk.com/information/how-bitcoin-mining-works/\" target=\"_blank\">how bitcoins are mined</a>, what it <a href=\"https://www.coindesk.com/information/why-use-bitcoin/\" target=\"_blank\">can be used for</a>, as well as how you can <a href=\"https://www.coindesk.com/information/how-can-i-buy-bitcoins/\">buy</a>, <a href=\"https://www.coindesk.com/information/sell-bitcoin/\">sell</a> and <a href=\"https://www.coindesk.com/information/how-to-store-your-bitcoins/\">store</a> your bitcoin. We also explain a <a href=\"https://www.coindesk.com/information/comparing-litecoin-bitcoin/\">few alternatives to bitcoin</a>, as well as how its underlying technology - <a href=\"https://www.coindesk.com/information/how-does-blockchain-technology-work/\">the blockchain</a> - works.</p>\r\n\r\n<p> </p>\r\n\r\n<p><em>Authored by Noelle Acheson. <a href=\"https://www.shutterstock.com/image-photo/global-network-over-world-light-blue-667929118\" target=\"_blank\">Network</a> image via Shutterstock.</em></p>\r\n', 'fa fa-question-circle', '2018-04-18 21:43:26'),
(3, 'How Can I Buy Bitcoin ?', 'how-can-i-buy-bitcoin-', 'Spend your Bitcoin', '<p>So you&#39;ve learned the <a href=\"https://www.coindesk.com/information/what-is-bitcoin/\">basics about bitcoin</a>, you&#39;re excited about the potential and now you want to buy some*. But how?</p>\r\n\r\n<p>(*Please, never invest more than you can afford to lose - cryptocurrencies are volatile and the price could go down as well as up.)</p>\r\n\r\n<p>Bitcoin can be bought on exchanges, or directly from other people via marketplaces.</p>\r\n\r\n<p>You can pay for them in a variety of ways, ranging from hard cash to credit and debit cards to wire transfers, or even with other cryptocurrencies, depending on who you are buying them from and where you live.</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.coindesk.com/uploads/2017/11/BTC-and-receipt-728x485.jpg\"></p>\r\n\r\n<p><strong>1 - set up a wallet</strong></p>\r\n\r\n<p>The first step is to set up a wallet to <a href=\"https://www.coindesk.com/information/how-to-store-your-bitcoins/\">store your bitcoin</a> - you will need one, whatever your preferred method of purchase. This could be an online wallet (either part of an exchange platform, or via an independent provider), a desktop wallet, a mobile wallet or an offline one (such as a hardware device or a <a href=\"https://www.coindesk.com/information/paper-wallet-tutorial/\">paper wallet</a>).</p>\r\n\r\n<p>Even within these categories of wallets there is a wide variety of services to choose from, so do some research before deciding on which version best suits your needs.</p>\r\n\r\n<p>You can find more information on some of the wallets out there, as well as tips on how to use them, <a href=\"https://www.buybitcoinworldwide.com/wallets/\" target=\"_blank\">here</a> and <a href=\"https://bitcoin.org/en/choose-your-wallet\" target=\"_blank\">here</a>.</p>\r\n\r\n<p>The most important part of any wallet is keeping your keys (a string of characters) and/or passwords safe. If you lose them, you lose access to the bitcoin stored there.</p>\r\n\r\n<p><strong>BUYING ONLINE</strong></p>\r\n\r\n<p><strong>2 - open an account at an exchange</strong></p>\r\n\r\n<p>Cryptocurrency exchanges will buy and sell bitcoin on your behalf. There are <a href=\"https://bitcoincharts.com/markets/list/\" target=\"_blank\">hundreds</a> currently operating, with varying degrees of liquidity and security, and <a href=\"https://www.coindesk.com/huobi-sbi-announce-plan-japanese-bitcoin-exchanges/\">new ones</a> continue to emerge while others end up <a href=\"https://www.coindesk.com/south-korean-bitcoin-exchange-declare-bankruptcy-hack/\">closing down</a>. As with wallets, it is advisable to do some research before choosing - you may be lucky enough to have several reputable exchanges to choose from, or your access may be limited to one or two, depending on your geographical area.</p>\r\n\r\n<p>The <a href=\"https://www.cryptocompare.com/coins/btc/analysis/USD\" target=\"_blank\">largest bitcoin exchange</a> in the world at the moment in terms of US$ volume is <a href=\"https://www.bitfinex.com/\" target=\"_blank\">Bitfinex</a>, although it is mainly aimed at spot traders. Other high-volume exchanges are <a href=\"https://www.coinbase.com/\" target=\"_blank\">Coinbase</a>, <a href=\"https://www.bitstamp.net/\" target=\"_blank\">Bitstamp</a> and <a href=\"https://poloniex.com/\" target=\"_blank\">Poloniex</a>, but for small amounts, most reputable exchanges should work well. (Note: at time of writing, the surge of interest in bitcoin trading is placing strain on most retail buy and sell operations, so a degree of patience and caution is recommended.)</p>\r\n\r\n<p>With the clampdown on know-your-client (KYC) and anti-money-laundering (AML) regulation, many exchanges now require verified identification for account setup. This will usually include a photo of your official ID, and sometimes also a proof of address.</p>\r\n\r\n<p>Most exchanges accept payment via bank transfer or credit card, and some are willing to work with Paypal transfers. And most exchanges <a href=\"https://www.coindesk.com/chinas-big-three-bitcoin-exchanges-end-no-fee-policy/\" target=\"_blank\">charge fees</a> (which generally include the fees for using the bitcoin network).</p>\r\n\r\n<p>Each exchange has a different procedure for both setup and transaction, and should give you sufficient detail to be able to execute the purchase. If not, consider changing the service provider.</p>\r\n\r\n<p>Once the exchange has received payment, it will purchase the corresponding amount of bitcoin on your behalf, and deposit them in an automatically generated wallet on the exchange. This can take minutes, or sometimes hours due to network bottlenecks. If you wish (recommended), you can then move the funds to your <a href=\"https://www.coindesk.com/information/how-to-store-your-bitcoins/\" target=\"_blank\">off-exchange wallet</a>.</p>\r\n\r\n<p><strong>BUYING WITH CASH</strong></p>\r\n\r\n<p><strong>2 - choose a purchase method</strong></p>\r\n\r\n<p>Platforms such as <a href=\"https://localbitcoins.com/\" target=\"_blank\">LocalBitcoins</a> will help you to find individuals near you who are willing to exchange bitcoin for cash. Also, <a href=\"https://libertyx.com/\" target=\"_blank\">LibertyX</a> lists retail outlets across the United States at which you can exchange cash for bitcoin. And <a href=\"https://wallofcoins.com/\" target=\"_blank\">WallofCoins</a>, <a href=\"https://paxful.com/\" target=\"_blank\">Paxful</a> and <a href=\"https://www.bitquick.co/\" target=\"_blank\">BitQuick</a> will direct you to a bank branch near you that will allow you to make a cash deposit and receive bitcoin a few hours later.</p>\r\n\r\n<p>ATMs are machines that will send bitcoin to your wallet in exchange for cash. They operate in a similar way to bank ATMs - you feed in the bills, hold your wallet&#39;s QR code up to a screen, and the corresponding amount of bitcoin are beamed to your account. <a href=\"https://coinatmradar.com/\" target=\"_blank\">Coinatmradar</a> can help you to find a bitcoin ATM near you.</p>\r\n\r\n<p>(Note: specific businesses mentioned here are not the only options available, and should not be taken as a recommendation.)</p>\r\n\r\n<p> </p>\r\n\r\n<p><em>Authored by Noelle Acheson. <a href=\"https://www.shutterstock.com/image-photo/bitcoin-golden-coins-paper-receipt-macro-750055192?src=uKZ8jrSW3mHuasGExMSTDw-1-21\" target=\"_blank\">Bitcoin</a> image via Shutterstock.</em></p>\r\n', 'fa fa-building-o', '2018-04-18 21:43:34'),
(4, 'How Does Bitcoin Mining Works ?', 'how-does-bitcoin-mining-works-', 'By confirming transaction', '<p>When you hear about bitcoin \"mining,\" you envisage coins being dug out of the ground. But <a href=\"https://www.coindesk.com/information/what-is-bitcoin/\">bitcoin</a>isn&#39;t physical, so why do we call it <a href=\"https://www.coindesk.com/?s=mining\">mining</a>?</p>\r\n\r\n<p>Because it&#39;s similar to gold mining in that the bitcoins exist in the protocol&#39;s design (just as the gold exists underground), but they haven&#39;t been brought out into the light yet (just as the gold hasn&#39;t yet been dug up). The bitcoin protocol stipulates that 21 million bitcoins will exist at some point. What \"miners\" do is bring them out into the light, a few at a time.</p>\r\n\r\n<p>They get to do this as a reward for creating blocks of validated transactions and including them in the blockchain.</p>\r\n\r\n<p><img alt=\"rust, bitcoin\" src=\"https://media.coindesk.com/uploads/2017/10/rust-bitcoin-728x578.jpg\"></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Nodes</strong></p>\r\n\r\n<p>Backtracking a bit, let&#39;s talk about \"nodes.\" A node is a powerful computer that runs the bitcoin software and helps to keep bitcoin running by participating in the relay of information. Anyone can run a node, you just download the bitcoin software (free) and leave a certain port open (the drawback is that it consumes energy and storage space - the network at time of writing takes up about 145GB). Nodes spread bitcoin transactions around the network. One node will send information to a few nodes that it knows, who will relay the information to nodes that they know, etc. That way it ends up getting around the whole network pretty quickly.</p>\r\n\r\n<p>Some nodes are mining nodes (usually referred to as \"miners\"). These group outstanding transactions into blocks and add them to the blockchain. How do they do this? By solving a complex mathematical puzzle that is part of the bitcoin program, and including the answer in the block. The puzzle that needs solving is to find a number that, when combined with the data in the block and passed through a hash function, produces a result that is within a certain range. This is much harder than it sounds.</p>\r\n\r\n<p>(For trivia lovers, this number is called a \"nonce\", which is a concatenation of \"number used once.\" In the case of bitcoin, the nonce is an integer between 0 and 4,294,967,296.)</p>\r\n\r\n<p><strong>Solving the puzzle</strong></p>\r\n\r\n<p>How do they find this number? By guessing at random. The hash function makes it impossible to predict what the output will be. So, miners guess the mystery number and apply the hash function to the combination of that guessed number and the data in the block. The resulting hash has to start with a pre-established number of zeroes. There&#39;s no way of knowing which number will work, because two consecutive integers will give wildly varying results. What&#39;s more, there may be several nonces that produce the desired result, or there may be none (in which case the miners keep trying, but with a different block configuration).</p>\r\n\r\n<p>The first miner to get a resulting hash within the desired range announces its victory to the rest of the network. All the other miners immediately stop work on that block and start trying to figure out the mystery number for the next one. As a reward for its work, the victorious miner gets some new bitcoin.</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.coindesk.com/uploads/2017/09/Untitled-design-3-728x485.jpg\"></p>\r\n\r\n<p><strong>Economics</strong></p>\r\n\r\n<p>At the time of writing, the reward is 12.5 bitcoins, which at time of writing is worth almost $200,000.</p>\r\n\r\n<p>Although it&#39;s not nearly as cushy a deal as it sounds. There are a lot of mining nodes competing for that reward, and it is a question of luck and computing power (the more guessing calculations you can perform, the luckier you are).</p>\r\n\r\n<p>Also, the costs of being a mining node are considerable, not only because of the powerful hardware needed (if you have a faster processor than your competitors, you have a better chance of finding the correct number before they do), but also because of the large amounts of electricity that running these processors consumes.</p>\r\n\r\n<p>And, the number of bitcoins awarded as a reward for solving the puzzle will decrease. It&#39;s 12.5 now, but it halves every four years or so (the next one is expected in 2020-21). The value of bitcoin relative to cost of electricity and hardware could go up over the next few years to partially compensate this reduction, but it&#39;s not certain.</p>\r\n\r\n<p><strong>Difficulty</strong></p>\r\n\r\n<p>The difficulty of the calculation (the required number of zeroes at the beginning of the hash string) is adjusted frequently, so that it takes on average about 10 minutes to process a block.</p>\r\n\r\n<p>Why 10 minutes? That is the amount of time that the bitcoin developers think is necessary for a steady and diminishing flow of new coins until the maximum number of 21 million is reached (expected some time in 2140).</p>\r\n\r\n<p>If you&#39;ve made it this far, then congratulations! There is still so much more to explain about the system, but at least now you have an idea of the broad outline of the genius of the programming and the concept. For the first time we have a system that allows for convenient digital transfers in a decentralized, trust-free and tamper-proof way. The repercussions could be huge.</p>\r\n\r\n<p> </p>\r\n\r\n<p><em>Authored by Noelle Acheson. <a href=\"https://www.shutterstock.com/image-photo/closeup-on-rusty-bitcoin-buried-ground-625077536?src=0G7nxvrIWW4fDUn60h7YZQ-1-96\" target=\"_blank\">Bitcoin</a></em><em> and <a href=\"https://www.shutterstock.com/image-photo/bitcoin-mining-cryptocurrency-gpu-rigs-date-703755544?src=9CKYSpZwnmuggYlPNCVwig-1-1\" target=\"_blank\">bitcoin mining</a> images via Shutterstock.</em></p>\r\n', 'fa fa-signal', '2018-04-18 21:44:06'),
(5, 'How to Sell Bitcoin ?', 'how-to-sell-bitcoin-', 'A guide on how to sell bitcoin', '<p><img alt=\"\" src=\"https://media.coindesk.com/uploads/2017/01/shutterstock_92729923-trading-charts-volatility-728x502.jpg\"></p>\r\n\r\n<p>These days virtually all the <a href=\"https://www.coindesk.com/information/how-can-i-buy-bitcoins/\">methods available</a> to buy <a href=\"https://www.coindesk.com/information/what-is-bitcoin/\">bitcoin</a> also offer the option to sell.</p>\r\n\r\n<p>The exception is bitcoin ATMs - some do allow you to exchange bitcoin for cash, but not all. <a href=\"https://coinatmradar.com/\" target=\"_blank\">Coinatmradar</a> will guide you to bitcoin ATMs in your area.</p>\r\n\r\n<p>All exchanges allow you to sell as well as buy. What type of exchange you choose to sell your bitcoin will depend on what type of holder you are: small investor, institutional holder or trader?</p>\r\n\r\n<p>Some platforms such as <a href=\"https://www.gdax.com/\" target=\"_blank\">GDAX</a> and <a href=\"https://gemini.com/\" target=\"_blank\">Gemini</a> are aimed more at large orders from institutional investors and traders.</p>\r\n\r\n<p>Retail clients can sell bitcoin at exchanges such as <a href=\"https://www.coinbase.com/\" target=\"_blank\">Coinbase</a>, <a href=\"https://www.kraken.com/\" target=\"_blank\">Kraken</a>, <a href=\"https://www.bitstamp.net/\" target=\"_blank\">Bitstamp</a>, <a href=\"https://poloniex.com/\" target=\"_blank\">Poloniex</a>, etc. Each exchange has a different interface, and some offer related services such as secure storage. Some <a href=\"https://www.coindesk.com/crypto-exchange-poloniex-impose-customer-id-requirements/\" target=\"_blank\">require verified identification</a> for all trades, while others are more relaxed if small amounts are involved.</p>\r\n\r\n<p>(Of course, <a href=\"https://www.coindesk.com/coinbase-reminds-users-to-pay-their-bitcoin-taxes/\" target=\"_blank\">don&#39;t forget to declare</a> any profit you make on the sale to your relevant tax authority!)</p>\r\n\r\n<p>You can, if you wish, exchange your bitcoin for other cryptoassets rather than for cash. Some exchanges such as <a href=\"https://shapeshift.io/#/coins\" target=\"_blank\">ShapeShift</a> focus on this service, allowing you to swap between bitcoin and ether, litecoin, XRP, dash and several others.</p>\r\n\r\n<p>Another alternative is the direct sale. You can register as a seller on platforms such as <a href=\"https://localbitcoins.com/\" target=\"_blank\">LocalBitcoins</a>, <a href=\"https://www.bitquick.co/\" target=\"_blank\">BitQuick</a>, <a href=\"https://bittylicious.com/\" target=\"_blank\">Bittylicious</a> and <a href=\"https://bitbargain.co.uk/\" target=\"_blank\">BitBargain</a>, and interested parties will contact you if they like your price. Transactions are usually done via deposits or wires to your bank account, after which you are expected to transfer the agreed amount of bitcoin to the specified address.</p>\r\n\r\n<p>Or, you can sell directly to friends and family once they have a bitcoin wallet set up. Just send the bitcoin, collect the cash or mobile payment, and have a celebratory drink together. (Note: it is generally not a good idea to meet up with strangers to exchange bitcoin for cash in person. Be safe.)</p>\r\n\r\n<p>(Note: specific businesses mentioned here are not the only options available, and should not be taken as a recommendation.)</p>\r\n\r\n<p> </p>\r\n\r\n<p><em>Authored by Noelle Acheson. <a href=\"https://www.shutterstock.com/image-photo/miniature-business-man-standing-on-candlestick-190186673?src=nJzWJfD6K9OjtwdZneHeFA-1-88\" target=\"_blank\">Graph image</a> via Shutterstock.</em></p>\r\n', 'fa fa-cubes', '2018-04-18 21:44:14'),
(6, 'How Can I Sell Bitcoin ?', 'how-can-i-sell-bitcoin-', '', '', '', '2018-04-18 21:49:28'),
(7, 'Blockchain', 'blockchain', '', '', '', '2018-04-18 21:51:49'),
(8, 'What is Blockchain Technology ?', 'what-is-blockchain-technology-', '', '', '', '2018-04-18 21:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_maincategory`
--

CREATE TABLE `cripto_maincategory` (
  `maincategory_id` int(2) NOT NULL,
  `maincategory_name` varchar(50) NOT NULL,
  `maincategory_seo` text NOT NULL,
  `maincategory_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_maincategory`
--

INSERT INTO `cripto_maincategory` (`maincategory_id`, `maincategory_name`, `maincategory_seo`, `maincategory_update`) VALUES
(1, 'NEWS', 'news', '2018-04-20 18:51:59'),
(3, 'MARKETS', 'markets', '2018-04-17 22:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_menu`
--

CREATE TABLE `cripto_menu` (
  `menu_id` int(1) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_seo` text NOT NULL,
  `menu_desc` text NOT NULL,
  `menu_level` enum('S','B','-') NOT NULL DEFAULT '-',
  `menu_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_menu`
--

INSERT INTO `cripto_menu` (`menu_id`, `menu_title`, `menu_seo`, `menu_desc`, `menu_level`, `menu_update`) VALUES
(1, 'About', 'about', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla possimus nihil iure non soluta, molestiae id, debitis dicta distinctio reprehenderit repellat odit delectus temporibus, quas, qui reiciendis quos dolores adipisci?<br>\r\n </p>\r\n', 'S', '2018-04-18 20:18:45'),
(2, 'Advertise', 'advertise', '<h1>Promote Your Business on Criptobuzz.today</h1>\r\n\r\n<p>Reach the biggest and best digital currency audience in the world</p>\r\n\r\n<p>Criptobuzz.today is the world leader in news, prices, and information on bitcoin, digital currencies, and the blockchain movement as a whole. Over one million people visit the site every month, including fintech/bank executives, technology entrepreneurs and investors, digital currency traders, lawmakers and regulators from government agencies, and journalists from major technology publications.</p>\r\n\r\n<p>For advertising purchases of over $7,500, please email advertising@coindesk.com for more competitive rates. If you have any questions, or you would like a direct deal with multiple creative, multiple positions, geo-targeting and other custom settings, don&#39;t hesitate to reach out.</p>\r\n\r\n<p>Audience</p>\r\n\r\n<p>10,000,000+ unique visitors per month <br>\r\n40,000,000+ pageviews per month <br>\r\n50% mobile; 50?sktop <br>\r\nTop countries: US, UK, Canada, The Netherlands, Australia and Germany <br>\r\n650,000+ Twitter followers <br>\r\n70,000+ Facebook likes <br>\r\n130,000+ Newsletter subscribers Our Bitcoin Price Index is widely referenced by publications such as The New York Times, Bloomberg, The Wall Street Journal, BBC News, Fortune, Gigaom, Washington Post, and the South China Morning Post. Our State of Blockchain reports have had over 500,000 views</p>\r\n\r\n<p>Advertising Options</p>\r\n\r\n<p>Standard IAB formats: 728x90, 300x600, 300x250 <br>\r\nMobile formats: 320x50 <br>\r\nHigh impact units <br>\r\nNewsletter sponsorship <br>\r\nResearch Partnerships <br>\r\nEvent Partnerships Our Bitcoin Price Index is widely referenced by publications such as The New York Times, Bloomberg, The Wall Street Journal, BBC News, Fortune, Gigaom, Washington Post, and the South China Morning Post. Our State of Blockchain reports have had over 500,000 views</p>\r\n\r\n<p>Premium Managed Campaigns and Sponsorships</p>\r\n\r\n<p>Please email advertising@Criptobuzz.today.com for rates and further information on premium, managed banner campaigns or for discussing sponsorships or other advertising opportunities.Premium, managed campaigns run across the following placements and can be geo-targeted:</p>\r\n\r\n<p>Top leaderboard (728 x 90) <br>\r\nMedium rectangle (300 x 250) <br>\r\nLower leaderboard (728 x 90) <br>\r\nMobile banner (320 x 50) <br>\r\nSuper leaderboard (970 x 90) <br>\r\nManaged campaigns include reporting and support. <br>\r\nOur Bitcoin Price Index is widely referenced by publications such as The New York Times, Bloomberg, The Wall Street Journal, BBC News, Fortune, Gigaom, Washington Post, and the South China Morning Post. Our State of Blockchain reports have had over 500,000 views</p>\r\n\r\n<p>Email Newsletter Sponsorship</p>\r\n\r\n<p>40k+ Subscribers <br>\r\nWeekly sponsorship of the CoinDesk Daily & Weekly newsletter <br>\r\n19% open rate</p>\r\n\r\n<p>Research Partnerships</p>\r\n\r\n<p>We provide high-quality research, and have sold thousands of reports. If you&#39;d like to partner with us on research, either for distribution, brand awareness or lead generation, then please do get in touch at research@Criptobuzz.today.com.</p>\r\n\r\n<p>Event Partnerships</p>\r\n\r\n<p>We put on the leading blockchain event, Consensus, every year hosting 2,500 of the leading entrepreneurs, executives, developers, and policy makers in the blockchain space. We also put on Construct, a developer-only conference. Get in touch with our events team if you&#39;d like to work with us.</p>\r\n\r\n<p>Advertising Guidelines</p>\r\n\r\n<p>We follow a set of advertising guidelines which govern how we operate. We have based this on professional industry standards.</p>\r\n\r\n<p>Phishing Warning</p>\r\n\r\n<p>There have been cases of impostors emailing companies pretending to be from Criptobuzz.today, BitPay or other bitcoin companies, and offering Criptobuzz.today advertising in the form of banner placements or &#39;reviews&#39;. Make sure you are dealing with someone at Criptobuzz.today.</p>\r\n\r\n<p>Contact</p>\r\n\r\n<p>webmaster@Criptobuzz.today.com <br>\r\nAny rights not expressly granted herein are reserved. <br>\r\n© 2018 Criptobuzz.today, Inc</p>\r\n', 'S', '2018-04-18 20:18:48'),
(3, 'Privacy &amp; Policy', 'privacy-amp-policy', '<h1>Privacy policy</h1>\r\n\r\n<p>Please read and understand this privacy policy. This Privacy Policy is subject to and governed by the Criptobuzz.today Terms of Use (\"ToU\").. This privacy policy only covers the Criptobuzz.today Sites (as defined in the ToU).</p>\r\n\r\n<p>Information Gathered</p>\r\n\r\n<p>We gather two types of data about our users: personal information and tracking information.</p>\r\n\r\n<p>Personal Information</p>\r\n\r\n<p>Personal information is provided by users when posting comments to articles on Criptobuzz.today.com, when registering for a conference, such as Consensus or Construct, or when purchasing research on Criptobuzz.today.com. Personal information gathered from posting comments includes e-mail address and screen name. Personal information gathered in connection with registering for our conferences, selling research reports and subscribing to our newsletters may include name, employer, job title, employer address, e-mail address and phone number. Credit and debit card information submitted in connection with purchasing research and conference registration is processed by third-party vendors and is not shared with Criptobuzz.today.</p>\r\n\r\n<p>Tracking Information</p>\r\n\r\n<p>Tracking information is automatically collected about all visitors to the Criptobuzz.today Sites. This information consists of both individual and aggregated tracking information and is automatically gathered using \"cookies.\" A cookie is a small data file containing information, such as a user&#39;s login name, that is written to the user&#39;s hard drive by a web server and used to track the pages visited. The mobile application used in connection with the Consensus and Construct conferences is operated by a third party, and such third party may use cookies or other tracking technology in connection with operation of the application.</p>\r\n\r\n<p>We cannot be responsible for the privacy policies or practices of third party advertisers and vendors. Additionally, third party advertising vendors, including Google, show our ads on sites on the Internet.</p>\r\n\r\n<p>Use of Information</p>\r\n\r\n<p>CoinDesk uses the personal information and tracking information obtained from its users as stated in this Privacy Policy, and for the following purposes:</p>\r\n\r\n<p>To enhance users&#39; experiences on the Criptobuzz.today Sites, including the display of customized content and advertising;To improve our content; and To ensure the technical functioning of the Criptobuzz.today Sites. Information Sharing</p>\r\n\r\n<p>CoinDesk does not sell or disclose personal information about you described above to other people or nonaffiliated companies, except to provide you with products or services, when we have your permission, or under the following circumstances:</p>\r\n\r\n<p>In response to subpoenas, court orders, or legal process, or otherwise to cooperate with law enforcement agencies or state and federal regulators;<br>\r\nWe provide the information on a confidential basis to nonaffiliated companies we engage as contractors or agents to perform services for us, such as maintaining software or administering payments. Information will be shared with such contractors only to the extent reasonably necessary for them to perform services on our behalf, and pursuant to confidentiality obligations; <br>\r\nIf we sell or otherwise transfer substantially all of our assets related to any web site that we own or operate and any product or service that we offer. In that event, we will require such third party to honor our then-current Privacy Policy, until the third party provides you with notice of changes to our Privacy Policy and permits you to exercise any rights you may have under applicable law to limit disclosures of information about you;<br>\r\nWe may disclose information we collect as described above to other companies such as direct marketers to perform marketing services on our behalf, or to third parties with whom we have joint marketing agreements; <br>\r\nWe disclose personal information gathered in the conference registration process (other than credit and debit card information) with the sponsors of that conference; and We may share with third parties certain pieces of aggregated, non-personal information, such as the number of users who clicked on a particular link or how many users clicked on a particular advertisement. Such information does not identify you individually. Postings</p>\r\n\r\n<p>CoinDesk does not sell or disclose personal information about you described above to other people or nonaffiliated companies, except to provide you with products or services, when we have your permission, or under the following circumstances:</p>\r\n\r\n<p>Postings related to articles on the Criptobuzz.today Sites are publicly available. You should exercise caution when deciding to disclose any of your personal information in a public posting.</p>\r\n\r\n<p>CoinDesk does not sell or disclose personal information about you described above to other people or nonaffiliated companies, except to provide you with products or services, when we have your permission, or under the following circumstances:</p>\r\n\r\n<p>Questions or comments regarding this policy should be directed to privacy@Criptobuzz.today.com.</p>\r\n\r\n<p>Updated on Januari 6, 2018</p>\r\n', 'S', '2018-04-18 20:19:15'),
(4, 'Terms &amp; Conditions', 'terms-amp-conditions', '<h1>Promote Your Business on Criptobuzz.today</h1>\r\n\r\n<p>Acceptance of Terms</p>\r\n\r\n<p>Welcome to Criptobuzz.today. By reading and continuing to use our site you (\"You\" or \"Your) agree to the following Terms of Use (\"ToU\") and to our Editorial Policy, Comments Policy and Privacy Policy. This website is operated by Criptobuzz.today, Inc. (\"Criptobuzz.today\", \"we\" \"us\" \"our\"), 636 Avenue of the Americas, 3rd Floor, New York City, NY 10011. These Terms of Use govern, and constitute an Agreement between you and us regarding, your use of Criptobuzz.today.com and all other websites operated by us, including websites dedicated to our Consensus and Construct conferences, any mobile applications operated or approved by us and any other communication tools including e-mail or any other content delivery method (collectively, the \"Criptobuzz.today Sites\").</p>\r\n\r\n<p>We reserve the right at any time to:</p>\r\n\r\n<p>Change the terms and conditions of the ToU;<br>\r\nChange all or any portion of the Criptobuzz.today Sites, including eliminating or discontinuing any content or feature of the CoinDesk Sites; or<br>\r\nChange other conditions for use of the Criptobuzz.today Sites including fees or other changes for Research (with reasonable notice, in our sole discretion).</p>\r\n\r\n<p>Any changes we make to the ToU will be effective immediately after we post the modified ToU on Criptobuzz.today.com.</p>\r\n\r\n<p>Content on the Criptobuzz.today Sites</p>\r\n\r\n<p>All of the information and other content displayed on, transmitted through, or used in connection with the Criptobuzz.today Sites, including for example, advertising, directories, guides, articles, opinions, reviews, text, photographs, images, illustrations, audio clips, video, html, source and object code, software, data, the selection and arrangement of the aforementioned and the \"look and feel\" of the Criptobuzz.today (collectively, the \"Content\"), are protected under applicable copyrights and other proprietary (including but not limited to intellectual property) rights and are the intellectual property of Criptobuzz.today, and its affiliated companies, licensors and suppliers. Criptobuzz.today actively protects its rights to the Content to the fullest extent of the law. You may use the Content online and solely for your personal, non-commercial use, and you may download or print a single copy of any portion of the Content for your personal, non-commercial use, provided you do not remove any trademark, copyright or other notice contained in such Content. You may not, for example, republish the Content on any Internet, Intranet or Extranet site or incorporate the Content in any database, compilation, archive or cache or store the Content in electronic form on your computer or mobile device unless otherwise expressly permitted byCriptobuzz.today. You may not distribute any of the Content to others, whether or not for payment or other consideration, and you may not modify, copy, frame, reproduce, sell, publish, transmit, display or otherwise use any portion of the Content, except as permitted by the ToU or by securing the prior written consent of Criptobuzz.today.</p>\r\n\r\n<p><strong>Disclaimer of Warranty and Limitation of Liability</strong></p>\r\n\r\n<p><strong>The information, products and services on the CoinDesk Sites are provided on a strictly \"as is,\" \"where is\" and \"where available\" basis. Criptobuzz.today does not provide any warranties (either express or implied) with respect to the information provided on any CoinDesk site and/or your use of any of the CoinDesk Sites generally or for any particular purpose. CoinDesk expressly disclaims any implied warranties, including but not limited to, warranties of title, non-infringement, merchantability or fitness for a particular purpose. CoinDesk will not be responsible for any loss or damage that could result from interception by third parties of any information made available to you via the Criptobuzz.today Sites or any of them. Although the information provided to you on this website is obtained or compiled from sources we believe to be reliable, Criptobuzz.today cannot and does not guarantee the accuracy, validity, timeliness, or completeness of any information or data made available to you for any particular purpose. <br>\r\nNeither Criptobuzz.today, nor any of its affiliates, directors, officers or employees, nor any third party providers of content, software and/or technology (collectively, the \"Criptobuzz.today parties\"), will be liable or have any responsibility of any kind for any loss or damage that you incur in the event of any failure or interruption of any Criptobuzz.today site, or resulting from the act or omission of any other party involved in making any Criptobuzz. <br>\r\ntoday site, the data contained therein or the products or services offered thereby available to you, or from any other cause relating to your access to, inability to access, or use of any CoinDesk site or the materials contained therein, whether or not the circumstances giving rise to such cause may have been within the control of CoinDesk or of any vendor providing software or services. <br>\r\nNeither Criptobuzz.today, nor any of its affiliates, directors, officers or employees, nor any third party providers of content, software and/or technology (collectively, the \"Criptobuzz.today parties\"), will be liable or have any responsibility of any kind for any loss or damage that you incur in the event of any failure or interruption of any Criptobuzz.today site, or resulting from the act or omission of any other party involved in making any Criptobuzz.</strong></p>\r\n\r\n<p>Contact</p>\r\n\r\n<p>webmaster@Criptobuzz.today.com <br>\r\nAny rights not expressly granted herein are reserved. <br>\r\n© 2018 Criptobuzz.today, Inc.</p>\r\n', 'S', '2018-04-18 20:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_message`
--

CREATE TABLE `cripto_message` (
  `message_id` int(10) NOT NULL,
  `message_name` varchar(50) NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_phone` varchar(15) NOT NULL,
  `message_message` text,
  `message_status` int(1) DEFAULT '1' COMMENT '1. Belum 2. Sudah',
  `message_post` datetime NOT NULL COMMENT 'Tgl. Kirim',
  `message_read` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cripto_meta`
--

CREATE TABLE `cripto_meta` (
  `meta_id` int(2) NOT NULL,
  `meta_name` varchar(50) NOT NULL COMMENT 'Nama Website',
  `meta_desc` text,
  `meta_keyword` text,
  `meta_author` varchar(100) DEFAULT NULL,
  `meta_developer` varchar(50) DEFAULT NULL,
  `meta_robots` varchar(50) DEFAULT NULL,
  `meta_googlebots` varchar(50) DEFAULT NULL,
  `meta_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_meta`
--

INSERT INTO `cripto_meta` (`meta_id`, `meta_name`, `meta_desc`, `meta_keyword`, `meta_author`, `meta_developer`, `meta_robots`, `meta_googlebots`, `meta_update`) VALUES
(1, 'criptobuzz.today', 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.', 'bitcoin, criptobuzz', 'Jama&#039; Rochmad Muttaqin', 'Jama&#039; Rochmad Muttaqin', 'index, follow', 'index, follow', '2018-04-16 20:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_social`
--

CREATE TABLE `cripto_social` (
  `social_id` int(2) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_class` varchar(100) NOT NULL,
  `social_url` text NOT NULL,
  `social_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_social`
--

INSERT INTO `cripto_social` (`social_id`, `social_name`, `social_class`, `social_url`, `social_update`) VALUES
(1, 'Facebook', 'facebook', 'https://www.facebook.com', '2018-04-16 20:58:58'),
(2, 'Instagram', 'instagram', 'https://www.instagram.com', '2018-04-16 20:58:53'),
(3, 'Twitter', 'twitter', 'https://twitter.com', '2018-04-16 20:58:47'),
(4, 'Youtube', 'youtube', 'https://www.youtube.com', '2018-04-16 20:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `cripto_users`
--

CREATE TABLE `cripto_users` (
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  `user_avatar` varchar(100) DEFAULT NULL COMMENT 'Avatar',
  `user_level` enum('Admin','Operator') NOT NULL DEFAULT 'Operator' COMMENT 'Level Admin',
  `user_date_create` datetime NOT NULL,
  `user_date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cripto_users`
--

INSERT INTO `cripto_users` (`user_username`, `user_password`, `user_name`, `user_mobile`, `user_email`, `user_status`, `user_avatar`, `user_level`, `user_date_create`, `user_date_update`) VALUES
('admin', '7712fcffc21bb7215f58035ab4506a5873c4af3c', 'Administrator', '085640969727', 'jama.muttaqin@gmail.com', 'Aktif', 'Avatar_admin_1516902685.jpg', 'Admin', '0000-00-00 00:00:00', '2018-01-29 20:38:51');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_article`
-- (See below for the actual view)
--
CREATE TABLE `v_article` (
`article_id` int(10)
,`user_username` varchar(30)
,`maincategory_id` int(2)
,`category_id` int(2)
,`article_title` varchar(100)
,`article_seo` text
,`article_desc` text
,`article_image` text
,`article_read` int(10)
,`article_post` datetime
,`article_feature` int(1)
,`article_update` datetime
,`maincategory_seo` text
,`maincategory_name` varchar(50)
,`category_name` varchar(50)
,`category_seo` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_category`
-- (See below for the actual view)
--
CREATE TABLE `v_category` (
`maincategory_name` varchar(50)
,`maincategory_seo` text
,`subcategory` varchar(50)
,`subcategory_seo` text
,`category_id` int(2)
,`maincategory_id` int(2)
,`category_head` int(2)
,`category_name` varchar(50)
,`category_seo` text
,`category_level` int(1)
,`category_update` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `v_article`
--
DROP TABLE IF EXISTS `v_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_article`  AS  (select `a`.`article_id` AS `article_id`,`a`.`user_username` AS `user_username`,`a`.`maincategory_id` AS `maincategory_id`,`a`.`category_id` AS `category_id`,`a`.`article_title` AS `article_title`,`a`.`article_seo` AS `article_seo`,`a`.`article_desc` AS `article_desc`,`a`.`article_image` AS `article_image`,`a`.`article_read` AS `article_read`,`a`.`article_post` AS `article_post`,`a`.`article_feature` AS `article_feature`,`a`.`article_update` AS `article_update`,`m`.`maincategory_seo` AS `maincategory_seo`,`m`.`maincategory_name` AS `maincategory_name`,`c`.`category_name` AS `category_name`,`c`.`category_seo` AS `category_seo` from ((`cripto_article` `a` join `cripto_maincategory` `m` on((`a`.`maincategory_id` = `m`.`maincategory_id`))) left join `cripto_category` `c` on((`a`.`category_id` = `c`.`category_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_category`
--
DROP TABLE IF EXISTS `v_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_category`  AS  (select `m`.`maincategory_name` AS `maincategory_name`,`m`.`maincategory_seo` AS `maincategory_seo`,`h`.`category_name` AS `subcategory`,`h`.`category_seo` AS `subcategory_seo`,`c`.`category_id` AS `category_id`,`c`.`maincategory_id` AS `maincategory_id`,`c`.`category_head` AS `category_head`,`c`.`category_name` AS `category_name`,`c`.`category_seo` AS `category_seo`,`c`.`category_level` AS `category_level`,`c`.`category_update` AS `category_update` from ((`cripto_category` `c` join `cripto_maincategory` `m` on((`c`.`maincategory_id` = `m`.`maincategory_id`))) left join `cripto_category` `h` on((`c`.`category_head` = `h`.`category_id`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cripto_article`
--
ALTER TABLE `cripto_article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `user_username` (`user_username`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `maincategory_id` (`maincategory_id`);

--
-- Indexes for table `cripto_category`
--
ALTER TABLE `cripto_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_name` (`category_name`),
  ADD KEY `maincategory_id` (`maincategory_id`);

--
-- Indexes for table `cripto_comment`
--
ALTER TABLE `cripto_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `cripto_contact`
--
ALTER TABLE `cripto_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cripto_information`
--
ALTER TABLE `cripto_information`
  ADD PRIMARY KEY (`information_id`),
  ADD KEY `header_title` (`information_title`);

--
-- Indexes for table `cripto_maincategory`
--
ALTER TABLE `cripto_maincategory`
  ADD PRIMARY KEY (`maincategory_id`),
  ADD KEY `maincategory_name` (`maincategory_name`);

--
-- Indexes for table `cripto_menu`
--
ALTER TABLE `cripto_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `cripto_message`
--
ALTER TABLE `cripto_message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_post` (`message_post`);

--
-- Indexes for table `cripto_meta`
--
ALTER TABLE `cripto_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `cripto_social`
--
ALTER TABLE `cripto_social`
  ADD PRIMARY KEY (`social_id`),
  ADD KEY `social_name` (`social_name`);

--
-- Indexes for table `cripto_users`
--
ALTER TABLE `cripto_users`
  ADD PRIMARY KEY (`user_username`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cripto_article`
--
ALTER TABLE `cripto_article`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cripto_category`
--
ALTER TABLE `cripto_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cripto_comment`
--
ALTER TABLE `cripto_comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cripto_contact`
--
ALTER TABLE `cripto_contact`
  MODIFY `contact_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cripto_information`
--
ALTER TABLE `cripto_information`
  MODIFY `information_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cripto_maincategory`
--
ALTER TABLE `cripto_maincategory`
  MODIFY `maincategory_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cripto_menu`
--
ALTER TABLE `cripto_menu`
  MODIFY `menu_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cripto_message`
--
ALTER TABLE `cripto_message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cripto_meta`
--
ALTER TABLE `cripto_meta`
  MODIFY `meta_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cripto_social`
--
ALTER TABLE `cripto_social`
  MODIFY `social_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cripto_article`
--
ALTER TABLE `cripto_article`
  ADD CONSTRAINT `cripto_article_ibfk_1` FOREIGN KEY (`user_username`) REFERENCES `cripto_users` (`user_username`),
  ADD CONSTRAINT `cripto_article_ibfk_3` FOREIGN KEY (`maincategory_id`) REFERENCES `cripto_maincategory` (`maincategory_id`);

--
-- Constraints for table `cripto_category`
--
ALTER TABLE `cripto_category`
  ADD CONSTRAINT `cripto_category_ibfk_1` FOREIGN KEY (`maincategory_id`) REFERENCES `cripto_maincategory` (`maincategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
