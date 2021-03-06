-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axole`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--Entering student numbers 

INSERT INTO `student` (`id`, `student_no`, `unique_id`) VALUES
(1, '6ba9c0a2358cfcf451064fdbdb8dc8ab', '$2y$10$sQynCn2z8BThyghoevX7I.glVdqhuMfOQdqsBLx26pO4Z9Sx26BoS'),
(2, 'f348aab6a7ce2df08eb077c585c01da9', '$2y$10$jyaGEOvU/1nVTmcK3ATvLOqUTSXOB9a.AKq5dpy2PIUVcyJZLNg.C'),
(3, '8a8663bcd08432929cffc6d41c02894a', '$2y$10$8h5BPYKMnboYYTVkPuFB8.VcACGqdU1UBGIwR0fGwkvR6iF0Muqi6'),
(4, '1676939ca7008abc0056e27dab801dbc', '$2y$10$0CJ2XAZ9KbHeIh.FTUY0/u6kzuRdINBbXhQCZiPwfyU6LcYWvICrq'),
(5, 'de8e619745b6b3045a95b8ad3815c16b', '$2y$10$hka4Jjy8lcYFYmxOQkoalOyWiU/ALBgEndBtPXIQ/6.9x2BOFjdaS'),
(6, '40cd1bfbc1ff730092363340167a7e1e', '$2y$10$/6ukNRHYdzHGo5FEuu/82utRz2fLA.fcdRVmAEcmNumbIs9aCud9.'),
(7, '8c41901f24498072cfd0caebe74fe305', '$2y$10$.OjFqobs4jhk8N7UAPHtbONgThiJDTwMuJtWSu3jhNPlwJMS8NFZS'),
(8, '8b02a6c0221fde65f8b3bf0e43c4cab6', '$2y$10$66sLPT19elQd/PKkZluRSebByO/lNXM/z4ZWXOWUIsgBac6OKXKSq'),
(9, '78a675ceb92d4d1c2fc93627cc2ae34c', '$2y$10$/4VTyzYdQAtGVFamycIm4.NKxyQZL0lNOevicaPt8FF1TRXMpkqim'),
(10, 'b8374b3dde8870e0f2be1b54fda99489', '$2y$10$4MnEgXiOMw40cE1TThim3uU..tx2NH8G8RYNM4Xd0aISBVrE82xAm'),
(11, '033e4b4c83524245a4ffb9925a90b273', '$2y$10$POCCkGKu6Fz0vQNu.nmrEetXRJKNuV2rzzbTsTLw5/isH6edwJAcO'),
(12, '74492f8e406e6ffecb36306850e3380d', '$2y$10$7omTAN0iirZ0fEX88GT5cOIFkCIKG1Xt/XM6g/k7TKhjfZQJgoJoi'),
(13, '4ffd33efb0a8b29c119020f78590242e', '$2y$10$PcffeH95E5qS0xjY/mMrZOcdWAkfgp5yczK03pisWZcMSRHvzZ4jO'),
(14, '74aaec98a1309714dddf4125c98a4374', '$2y$10$pIq0v6hZwnBq6yxve46KLO3glOq0Sdh/doLl5n5Z6Xwd99Q0te47q'),
(15, '463baa0762c95135bce0f14676a0bb89', '$2y$10$3fGi3799XFjW5nE8hUXyYO2W9Azdtu0vinzIAlUgYTDQ8GnEUyH5K'),
(16, '6e50010e6416197d064912a729783152', '$2y$10$B8kRTF.NbuP.baUgn.qtxuCHE2O5eoErXG6sFA8z9CXW76s3K5zmq'),
(17, '125b4e284e73e8696ed223388cf23db9', '$2y$10$oVn5aANtc1AJ879gYfjr3eXU//0M9Q7/smIXaIr4t2xM5HoL7kRfm'),
(18, '5191d63a9e13cf67ed15a236e570344e', '$2y$10$7qSZi.lXkw9BUSXLFLFn1ewfx03.L0OdYuKcblZrbSWv0P8bVSTTy'),
(19, 'bd6b3d4509582d60224fa3e7e3c05fe6', '$2y$10$hDKTJCjIsNiyazbk8ajqHe6g3ts.WX4T1.QNNiyckepAUqtVNBXRK'),
(20, '7c1774150f485ad7fb1230be69fd41ac', '$2y$10$kPl/ppYQut6rV8x7Jar5I.KCT2NbCniAKq9uxAWgdH5/l2QB5bd.2'),
(21, 'cbfa014c3b037d9fd3c26185edab5022', '$2y$10$DXcZK8d2bJ0pT0dNWFzZ.OBfFUtFsqd5nUeutpKBWOLVyxm0XkcIq'),
(22, '21e5c8a50f6aca2f8c511b77a3026df9', '$2y$10$C5TZ7u8ugtA8r/ugM5wO2.RdBCFjC4U2xucMt/xLYB9xCg8PS1eG6'),
(23, 'd48ee8217e9256754b0f65607547f43c', '$2y$10$I40.901E4ZNtVV2Pue25Mu.jslhXyacyOjJ3FECEvxa7BRGGiMkJS'),
(24, 'd2a19cd3c657068251b9de9d36787c87', '$2y$10$FpYxj43dAIzoNhNWz/WtxewgYldN7W8RRJODIRZ7hqLsF118KvA5e'),
(25, '41300939c8ae5eacba04fd92b8a612ff', '$2y$10$sm419DkruBeUEB9dgDe0jOpm0CVPex4IuxHpHalZpPnbUOpxOrO4u'),
(26, 'a459ff48670351a70c8328a00eb1afad', '$2y$10$JPY9V5x/I5Yj/lq9BNod7e5ppCEou7EiP7S7Qg4r5OHekemW6Q3pi'),
(27, '18bbb1d693a7a11e9104f1e3568ba355', '$2y$10$/YuNEbDLZFsvds.We//PP.A0fAjHeScTZKRgkrps5FZwRtbAdaaYW'),
(28, 'de09ac13ce632c58beeea456e45ebead', '$2y$10$VJ62U/gQQKYrbtScfsaqPuRzkHqsmWLqKitufUgw.G8nAKA4816Gm'),
(29, '02eeec290ec5a57ae51f891f4b1681c6', '$2y$10$dykuJtdApJ52nvAl5D1HyOAX7qzIgsOX93NnRozHwB73FOxXLSP/2'),
(30, '53aede0ef2ecc886598d27f0cb97e34c', '$2y$10$psbsn0JXKTkMHU3C3ZpwI.xuMX5tfEJ7FeTN16HhAmDqLaSPOdaJC'),
(31, 'a2451a32cc757ec2b604d01fe0513e1d', '$2y$10$fB8s06S/Vr1T1F2DGnJh8u5kFRwUJBVGf40lnUDGt6Zk/8LAn3w..'),
(32, 'cf2291e4a8bbf0401fcee4d6533f98ab', '$2y$10$qIF0diuZJsP/y0XcG.qOjO0bxDU7swi1uieY.gcBww97lif8o1OOS'),
(33, '8adfedd0de2a73a87bab21eebe0c3c5e', '$2y$10$gmI.w85e1Wwx1AskC.Ai2uQ1oN22KuwjLbHnoFmWXacImTrnBdVai'),
(34, 'bb4e534f137ca4b846d2463009d562d7', '$2y$10$xg4wqGfw1m0V.PlVJM.fD.exPrbQ5S6nULY.tCvRXDrhFmuWfR4Zi'),
(35, '2d72d12b39a3a9ced78fce929c609ec7', '$2y$10$Xmc.wlw6QF8XVeprkdBu4OTS7TyQfuaBzR1H64mwwB6if/hOs8OQm'),
(36, '8ba6c8c56c6372c2dc1628a2422c035b', '$2y$10$KM338V9PsNHRiVKfo7ZQC.KAwHa8rKw8WfeBY.fFUopOBg4SgTYtq'),
(37, 'b93def181857c86e92d532d7225c62e3', '$2y$10$yricmtBIeWe6QQNUn4cRee5BQDCSx1pqoVms7jiKWToMCyrMeWcsC'),
(38, '3e930fce7819486d1a9edee17cae61f2', '$2y$10$6G45e03kEA5pyGBOfAoCl.XfKhFiL8JkUEsVY/tgf2CPwzNdwja9a'),
(39, '718ffcdb6e986813f32b843af2b1ab25', '$2y$10$cukRHoor/nXMwdl1YQ5PRe2Xj2l1fkfaTSfxSVBjGVzJzbIFnJEZK'),
(40, '15ca1400a60653134feb1bb44b20ebb4', '$2y$10$netxpr6J7RZlhmcVnJtxseZLkGSIIDob5ZZRlbe4xui1RyF8QfBia'),
(41, 'c137433f18ffabca815a3618d9ba9cb5', '$2y$10$zs8Tf6xLWL8YripMLYQjn.99yHETYZ4OuR4U3hiQy0IdEOWfsklfW'),
(42, '09ad6c2d356ccc6778cd382b0f1de73c', '$2y$10$shnuDvqWhSkAvXp8wDuf3ewFEddU4ZPYcZ/lFPr6meTjvxTLP.9EG'),
(43, '3af5fb2469e960516b86a849b17825ed', '$2y$10$mtrRbhC3KZTAQgKfgyHll.PV0HM34e7.nXcdFUNSGFgV26nW/SijK'),
(44, '12dd6dd9beadfe27d967a452f8ff2765', '$2y$10$EAB.ZZT/vpxFoVSW9jPUEuJobgLswuErHP.HfeeikSfm76gdAUQZG'),
(45, '7e081577b046d11a9b8b864c1961f73d', '$2y$10$nmep2lOYhzQ9BjyTxPt6Y..jnRbGplXy3R7CNrSKn3pAm.k4qTtoq'),
(46, 'cb02ba44c49d6ca328fef8fac1c53299', '$2y$10$CMVWU7UyaqV/8RueNqTZP.o0IL4mo5JXbAn9XMuj07H58Sj9hZ9zC'),
(47, '114a7aa72750795ac1d0a7edb8e5fe03', '$2y$10$rAk26I4LpLOfY.umWHVIAexO.FVp5dzGd/0iM1s/S1inLCATzSvGO'),
(48, '30ea823234da1fbc9e7dc6049a031d00', '$2y$10$AYPRG4v0kKHZBLmaKv3K1eEBe05qiMgfzUFCA.MgjBpVgC0XRI6ka'),
(49, '2faac7c8aaa2756f3e9b824f63fb5323', '$2y$10$4zHPXGNpHsWaVKq5ym7e6eLCMIsqOCRD0XnHjD7EkCfOPyoYwoNSq'),
(50, 'f8785dc3f011362a2cb916ba1e9b264f', '$2y$10$cct7xHLZFJVTIMtf6RMRGeyfiMu5jvMTTXB3bYS1XBZMsOfktl75m'),
(51, 'eaf56ebb4f7640285cfebce2ecb22bf5', '$2y$10$f.chhDPY2QTLr48W9v/WLODx0/oXX54Mb3OMjCD1KsfwXx7rHD4Wm'),
(52, 'c99564c5ade5fe80442f5c92136690eb', '$2y$10$eLw/m.Ux5hKdBGC27rRCDOslLsMo0vYgH1yG1fjJmkiEV2DWsZ3Zq'),
(53, 'b2e2ad63d4bb660d85477bab31af72aa', '$2y$10$2UNyzH7o7vz3xuLrYjO63ubdjUK095EeKr95i4MtDwgt1Le5T6/U6'),
(54, 'a1603200053d6d3991532f2946cdd989', '$2y$10$MgoFJ8e9M52P7NJRgE747uLVvm3BPwKAcSTsba2o.sRPcaW1ctZ3i'),
(55, '4f9e00d55f6bd2b23816b732f5884f85', '$2y$10$o1KPDrX7/fV0G694tFm1z.gAOYTfvuwLyJ5jQlY8N.8Ql0Mw70UrO'),
(56, '03eaf128fa4dc797aaaa214056b03e65', '$2y$10$Pqk9FToN18NSOTCg5OfaMud/rLc46yqjH8NY4KdrA5GHMZZPqgCim'),
(57, 'af12c2b718740db130b6173c35ed50e1', '$2y$10$AMXghhNkRuzkEsjX4A.DEe7WX.l0t3KIayiDniDNw8uA.EQTXLAAC'),
(58, 'a1d48faee12f396bf63e90b515c3d177', '$2y$10$vFa9Xkzb4r6TpiM4udiVZ.wsBJ4O2PSBQmDI1a0DzbKrgu1ETXV3y'),
(59, 'c87b24800da1d8be51af3fbfb45f4c14', '$2y$10$35SfVLxU6Ml82mC22v46FumOXgbPSU2WftAA4gFhwer7vQoqkgKE2'),
(60, '71dd54746937ae8b610f7ab0f382b7ac', '$2y$10$gqOK/rn7nyzBLI/1gvOE5uc2gxXE6FZeFqp5SZmgPl2v78HLO01fa'),
(61, 'd7197c7c080c7665e8a4441009709f0a', '$2y$10$Y5MAxHvdAuXTUZJOuHBnjugm7I0jXR0i4WKqIQLe4CJE2141sC1cC'),
(62, 'c4d3deb9b44ede93f3055f686753c437', '$2y$10$ZC9h8rq0maJYWEai/ODojOnhOAWNbkhuY0wCkj/3hy6i7ovBHG9Pa'),
(63, '12d6c930bd12a964d121081cc5d29595', '$2y$10$jDmPI1ud1eEdev9nCnm2gOZ/78ttAaoGGMPY4s1M1SXJKsi07Pzuy'),
(64, '1098d3320bac50744aee647c489ae8fb', '$2y$10$8iIcOiCxLp4HeRPWQTP1g.2Zqtdi2bRiFGaFq2gtVdcmN8ObRB2oO'),
(65, 'e313c40458d70142eb1c6721dad62bf1', '$2y$10$hAwKYAY.M4/Me1Ewg.4Jw.rlwxChar/0zNLGhk60883dQDitRPcTe'),
(66, 'f1f342be08ba40a4601f103f8a5ff233', '$2y$10$.OsXFW5geWDRdpUjz5Q0Iu1i4eKu07MPWR9h6.J1X/MH5nOVdeTrG'),
(67, '22393a785300bdd60b8c466092145785', '$2y$10$024MoHs3/Zl9dFd7MbXMPOHwXM/EQBc5Lay1pDzECM8btLb5B0jlW'),
(68, '1bd869053585f33c3268c102f653c7a5', '$2y$10$2NaYkJ6T1baNVYsm6J074.HOV4ftrD./L8y4rq1F3jRVO.Jygj0VO'),
(69, '6b08152ccf96c2de0c2e46efcb2015cb', '$2y$10$/l6Mk8Zw.4087tFNSgfaieTmGu6BuMxt0l6wimr/MS6hUmuqwS/du'),
(70, '205b8edec8c3f939c395e7aada8b38f9', '$2y$10$0.d90twBuJNvFcmsvOTkc.bkj.OBvfG01Yg7UkbfSsKW.EXO5TTlu'),
(71, '7d426c32b2b5f586d833caa84f76e2b9', '$2y$10$4GoOHYRh2Ulj85v75Cb.TeMcx5PCJcOIjz90GAvTniDSIgnEXi.v.'),
(72, '40d0b08eaea79e2868a2be3568952cb7', '$2y$10$t2d2/0GlZZxgIfzp.jdtBujZrYGbMvoRHgkLs74iNpeFyuxszQchy'),
(73, '06bf2b5a6b5e1d3396bd68b6601d6046', '$2y$10$ixf.UF7Zvhq9Y6d10Oh0meUFQ5ZNgJSJ4xtP.BzCWnX8ay.TLOATu'),
(74, 'd5001ac5eab2da62017a4496529e1917', '$2y$10$.yVXGMojRuNNb50oc1VZr.08Zte/lSZqs42oDKptAjulRXG2Hwr9u'),
(75, '1ac56643364133e8a2e4e4b17e4d18ba', '$2y$10$NO8kXdYl7ofjrJvKqiczGeD1JjoUC/sYgWKSAzy72LCybKvRB0Us.'),
(76, '94dfc18e150a9d156687e084560f450c', '$2y$10$G2PetU/q66mDDrqxHnoc1Oke00WJmYsTljUvXyDL.W6FMCXDj7HEG'),
(77, '8546f89823bf19884cea38f86352c829', '$2y$10$XBRIV9YX8h27tlirqalpSOUIzPi9Zn5YNq2j22EIwnxb2aU1UeX8S'),
(78, '8e17ba51e321d0083eec24807f1e6387', '$2y$10$EJhTO7929JnOBcdcgokai.VlQOSt3T17AOahGUcDrDaHZjZNRO.9W'),
(79, 'b9961afe5308e38883ea8c11724a3fbe', '$2y$10$pJwCvS72Ysr7d4/R2fj8jeg7wURlrbRzL3yUHsVN5VFSpZSeCoiYi'),
(80, '62dc90b4a3ca915aa642851b2345ea4f', '$2y$10$yxpnIfNMWwdim2mLDuSVAu6VGoBPnWhkIrj156qXrCE6AhR6SHo7m'),
(81, 'b2d4b7bdbabcb7141a7a39c9b039b5b9', '$2y$10$pcY3WhgA0Qqs.UBOQv.j0OiWn0bD0FLRS7zUun1wLBd4FPUXQctsC'),
(82, '07e9d6575eb15c854924bf3cb1a7ccbf', '$2y$10$.BkaIaKV7GdMBgaK9q21hueth50VkF7kBaykIwaEX1jHGwPgAJ1.a'),
(83, '4b35f2020963df3a5029ff7716771044', '$2y$10$wtQc4xiVuS/7SGjf0NZKt.RP49Fyo1fukGiVBLptL8DBvaiPlFehK'),
(84, '3bea104aaff9f15950de0acf0ba03eb4', '$2y$10$peQ/kTn5k9rRQDSqJgR0jOBbLI0eAnpyQku3r1m6NqLR7ELXA40m6'),
(85, '7c2c98c4ea1e3d89e79bbb3fd44245dc', '$2y$10$99PdM.Zy5lEB.6wmNPJteeNKBtGls8FVLpObSjAycrGoQa8k7pCLa'),
(86, '4daf1c98a326117c73b08abab5699268', '$2y$10$l5nDOrMfRPwsAuVhausUleDcPfeLbJx38xnnWtNzHom6sjA8GQ5XC'),
(87, '6d57e1f5c41b730c16dad0025612f666', '$2y$10$0ZhSYAtRjtcx9NsbPlhUHO2HnT6P8./NQlS6dOru9nLSN.jm/1lgm'),
(88, '2d772ddbc23a0480d7abbb6dc81bd7e0', '$2y$10$RwkkaGHn2OTlsucXyi92mekhUQydeTrVDkpCInoOkqYgE7zk2D2m.'),
(89, '11de3c2aa092ecbadac548b1e4fb4186', '$2y$10$CnmI9dCYGghWbhVe2jm3SeHYsiddn2PDVDXnIFIwrzEAc.E7B1qba'),
(90, '383cbce32bdefce8533bd3d2deef6ccf', '$2y$10$HZzSPoyqIMqwNpFLjhRMaea0yZt9XYB.qjG9NkCja7p9tto9tucRO'),
(91, '3415fc03c97f9f29b3a80c4973454ff4', '$2y$10$sOxkINHwYikZLZNPiwWGS.LUlV//VcQG.gGlB1g8rQewlRVgzwpHe'),
(92, 'f81521c9977677c8e8a5fcb3fe54bba0', '$2y$10$MiZFaiEK5d4caRHYZpGibeZ2yCJdY0WtCrffIEi5G8bu72suyaac2'),
(93, 'eefd3636268deaf429b2eba537ff0f1a', '$2y$10$ScEo.bdLoumQlnXAPL9R/OLulp9QCgwFUM5bVn4g8FjiQQiw/pv8u'),
(94, 'e0351c7d1ad8878a06ccd4cea6b3670c', '$2y$10$q2Rs/krvtWPb42UJ3LVapOGo17nMHZaOBsbWL9oNgrZCq.XOrTr8a'),
(95, '37974cd74c85cd74f130a1192e2d5b2b', '$2y$10$xo0QAr7U.00ysqB7ZABWtu/W3zA0VGdFOIGugwIIzPIhkMmFS/Ljm'),
(96, '93cff91600438e8681589ed4514e90b6', '$2y$10$rBGdU1C3zv581f7jfXz91OQLF9LLRfU0LQpMNQ2Mpt4bKnJEwQnbS'),
(97, '20f81b9c8fc1a74cd1819837624f69af', '$2y$10$bTwbuhFIY3CtFHfH6F4Ut.O4vSG4TtkUV8RPmqDI8JPLICMh/QO.2'),
(98, '198bf04ab62da61ca40b64eb54cf525c', '$2y$10$QWvF2OdrA1g6FNV.x10RpOpLqAkJ5YdKCoibFjkrlv1VtQ257Trd2'),
(99, '96297826c22830809b88359f6e739921', '$2y$10$tBBVzK4KGLUlRFJ84.qo4u4zbgAv3XB.BJB47X1pe2vZo7rI60YGS'),
(100, 'ed54deb5387a87061291f9655b87b657', '$2y$10$6kLFsnER1v1t3.lHwDjYgOJqR1WQ9YMy1F0KXDCgQrZ/3hVLvFv3y'),
(101, 'b2b8bab4c7c60f03ea23d35bdc1fd16e', '$2y$10$bPOG6wjVpZBknqlJiuRod.Hc39GkQsFS3.NhNsJNwMFP4mA5lIe5O'),
(102, '65dad5573c6f6b411af2cf55d264bf21', '$2y$10$6wq9GE8gbNev8Sk6qCw5AO79m0Vz0mIEieTV/UWvF9aYayC7XWnle'),
(103, '7b635bd854872a63cb8adb115e292b96', '$2y$10$ZdFxOaSK1zC.r93GQ87Hg.omst/btTG2eLkyIZDpSOdWPLQbx8htm'),
(104, '42766fe8f935ea6fc3043759dd696889', '$2y$10$ziWYeJYaiU/Pxb5JZsFiX.IbREkriN.LrBEFanJNmoaVD1O44Ioam'),
(105, '688794deade219cd4a85d72249d8ccab', '$2y$10$Qz05xBMnjbKOED.FttIvcO.z.5mlyLTqV9nHVCu70zI9gx4CpolBS'),
(106, 'e16e4014c6167d1ace16f0f15b54e7cc', '$2y$10$DAyuU4rfRGNOVVjgMNUS5u6pfbynbe8rz.p9rY1FKkyEkVo7Dj46S'),
(107, '001631ee5394e0c155c269c87c79d101', '$2y$10$U9K66sctQPlI12UqWvXXxOkZ9Pp4oxtVtxuzYdXDrgPOt5qkAbkFy'),
(108, '00ec54a74d2d5c63c14cc7233c1bdcb5', '$2y$10$dHTRP0EWaZRWuKvuxn.baOquOe5kfjq8pIZSmkA9QFB03H/JuLXUi'),
(109, '8c69dce58de25ed3f29b3dc116e2c55b', '$2y$10$U2scFlM0.pGUJS21Tq14E.OnFVHTRgYYPFb3WYd67O1ooh6FNoFk2'),
(110, '2139e9a18026ce1932ece376741ce09b', '$2y$10$CmBxu8/Q4Bmy70AguYpyse.DVBZfFyJWNk58pGBs57R4A2HMVtPrC'),
(111, 'e63f4ba0ee646696125a8faca20fe0da', '$2y$10$c4CKUCQQhg0JJSpGmlP1w.xAXXy2ZkzrgyiETqBT93w0F04cZGQW.'),
(112, 'a5bc03dc82227ad9934444ed86b46f8b', '$2y$10$MXKzrYkFdxZB8HXtQrBZVOwxMsJDF2mPMcSswUDndVkwFO/qq2LvG'),
(113, 'f449121f0d7345abe7861e488e58d476', '$2y$10$OuPWSkWBkpOuKgvqOnDIxurCqlc7Nj6B8dOZ8I0btEVXIZOztuwUq'),
(114, '29d8dd4890401fc19e9588cfb85f6677', '$2y$10$83GezLI5IGBxYVeWjdjEAuNX2R4S.vYAHTmte9I4x3xi2KxJZYrbe'),
(115, '785658d4786e61f21f6faa788d4545b1', '$2y$10$K5eyLsA6Mn.Dba6X93gfJOUXbNUM9TyR/gTAtCSA5p8F6KWXhNBOW'),
(116, '9837663f1bd69e85d2d72c045b194429', '$2y$10$9PgTuJxyyRQgYgh/YYTn6ek.nbzTls4k2uyi2Wh5jDEDUorpoUEfu'),
(117, '33680a6d4cb55d9ba83f00df0685c9e8', '$2y$10$.cyRUow5cFzGsTOIPQMKiuFsb3wlJn1QTvf/JxesxMJOGExESGIDe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
