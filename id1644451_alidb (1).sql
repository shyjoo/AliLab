-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2017 at 09:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1644451_alidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apiNY` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `apikey` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `pass`, `apiNY`, `apikey`, `type`) VALUES
(1, 'zxcv1', '$2y$10$EV2LsVt9evIm60wn2rQsTOb9DWPmcKqmoZTyV58LHAjJLjVtxK5hy', '', '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Shopping'),
(2, 'abank', '$2y$10$SClQhUhuY.xf.XjNBv54c.W6XTnmU2T5o8TofMK2LejSqSAwoe8sW', '', '1bc44ae8485b142450328ee0652a1b360dd181d429b990cca3d8db9411f2a9f6', 'bank'),
(3, 'bsoial', '$2y$10$xSK1ZER/7mJ1h7a1JKVWWu.7ncXgf0tSGd02iBt8XQYz7EM1KsM0G', '', 'a1cdc4fcfe4573cb67718c3ef4702806ba00463319da620df765c6b0e7cbfd36', 'social'),
(4, 'r', '$2y$10$6SHjY9G6LQdupRs6sSGmSOUWWNiRjH7f7luBJ5c3lAq9dPX3QPxza', '', '09d73981e89e65e17642899daf79cf70c785d37575a596e4f31d13eda01222f9', 'social'),
(5, 'hkl', '$2y$10$qIvY7e.UsTR1VF.ujbzxseUAlAP2ROUPHKXtAe6p9YHCB8lmP3CfO', '', '3692fe38d71a03eeb675a9ba468da7683726b5be92fc394225359e402d4aa348', 'social'),
(6, 'safdfdsag', '$2y$10$ZG4m5J/yAmEZxgjZTYjoQO1wsQ/DGt4tCcLMu6MY1ieQzx6OFLBkC', '', '9bd06b4ab22144f7586ef3d78c7ad217ea9cc4fa374a90fd5e774bd39fc907e9', 'shopping'),
(7, 'hahdhfn', '$2y$10$11YkYk7AOGpAOwidktzKIuNn8xU5.MvtrNTywLUUUXiENSnt3a6fG', '', '31d796c8038bd68c91a961683b0804c2cc76945685d5cb38e539fbe4fcd7a002', 'bank'),
(8, 'miju', '$2y$10$UVMGr1MEPVJF22wW8eCK..Sf.9OJlMcIsEPyZETXg2ZE6hLppR1oK', '', '6426d758b7ae766b0a134c4a29d904a096b928b6b869cf39a75e20e769232727', 'bank'),
(9, 'mijt', '$2y$10$idbnIgpFttS9g3cZSaJme.okZ.10lkrlTlyQ2ZmTF.4lJ0UWY2uOa', '', '4ea3312c01d23687d000887de48f7149cbd731a4c791acc3f562e11715e87be9', 'bank'),
(10, 'qwer2', '$2y$10$DvluniOJQVTX203QsNZd1OxxBlxmQ3t1kNHTkpW2cidFhNGzXg1ba', '', '32500c76815a3ad0ce5961bd3d9292776e1d3a3e5836d4b63dc4e6c26208a41f', 'social'),
(11, '', '', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', ''),
(12, 'qwer', '$2y$10$STz0NnWQ8/AQF607scrFwe3tq3Lwbh7ClYIE/QZ6FrIWtSc2GGx2a', '', '257a6045bc7fc3e1aaf933e8f5e53058ef0ff7c0c7387a6196ea38489fd55428', 'bank'),
(13, 'asdf', '$2y$10$5BSjaW0U/HgcNgi8NTvnVOKmoT.ZJPt.dtVCw3c2qXXUtz9ACUMV.', '', 'b2be12ff7690e92eb29ede9dda3ef449949e092d26804ba73181aea3e41785f8', 'social'),
(14, 'asdfg', '$2y$10$MsC9jH6JtcQr0kb8pijGyO9IPAWLUAs/Ej7APGdUgd.f9azarwSMK', '', '78099b6f0edf64d39068a1127769f9868bc22aef3ced9ade5765678afc4a4726', 'social'),
(15, 'testbank', '$2y$10$NURqZ9ipoz.evC02S6Oq7.VmCdmZILFPQFpMRYSu01YUqlJi.MjjG', '', '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'bank'),
(16, 'testsocial', '$2y$10$Lj5hiBEgKBQ.1d/0Bc0JB.yIli.rMOtTitKpwNOkgDNUpZTvs62LK', '', 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'social'),
(17, 'testShopping', '$2y$10$UgBXuRvZRaMngmxRJt5PGOmJAvoAPEeHJ7PItSuvFCZ99uFNGHQWi', '', '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'shopping'),
(18, 'zxcv', '$2y$10$fZJ4KYB/GqN0DRdN1bAwPugGLfGCZmR.AG136U0bLoCQ5Dx1US/fa', '', '7a5f12749882351b2afa49101a4c9da77498a46a45aec0f9f2eb92a6a40f93c7', 'super');

-- --------------------------------------------------------

--
-- Table structure for table `Log`
--

CREATE TABLE `Log` (
  `id` int(100) NOT NULL,
  `agencyName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `queryDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `queryID` int(10) NOT NULL,
  `param1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `errorCode` int(3) NOT NULL,
  `message` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Log`
--

INSERT INTO `Log` (`id`, `agencyName`, `queryDate`, `queryID`, `param1`, `param2`, `param3`, `errorCode`, `message`) VALUES
(1, 'a', '2017-06-26 05:16:30p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 0, ''),
(2, 'a', '2017-06-26 05:30:23p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 0, '{'),
(3, 'a', '2017-06-26 05:30:55p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 0, '{'),
(4, 'a', '2017-06-26 05:32:47p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 0, ''),
(5, 'a', '2017-06-26 05:36:36p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(6, '', '2017-06-26 05:43:18p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51b', NULL, NULL, 203, 'Dosen''t have APIKey'),
(7, 'a', '2017-06-26 05:55:23p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''''),
(8, '', '2017-06-26 05:55:48p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51b', NULL, NULL, 203, 'Dosen&rsquo;t have APIKey'),
(9, '', '2017-06-26 05:57:18p', 1, '', NULL, NULL, 203, 'Dosen&rsquo;t have APIKey'),
(10, 'a', '2017-06-26 06:10:55p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(11, 'a', '2017-06-26 06:12:37p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(12, 'a', '2017-06-26 06:13:03p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(13, 'testbank', '2017-06-26 06:28:14p', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(14, 'testbank', '2017-06-26 07:36:27p', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(15, 'testbank', '2017-06-26 08:10:45p', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(16, 'testbank', '2017-06-26 08:11:03p', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jan', 100, ''),
(17, 'testbank', '2017-06-26 08:13:40p', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jan', 100, ''),
(18, 'testbank', '2017-06-26 08:14:27p', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jan', 205, 'Dosen&rsquo;t have Name.'),
(19, 'testShopping', '2017-06-26 08:15:09p', 2, '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'Miju', 'Jang', 204, 'Only Bank can get SinNumber'),
(20, '', '2017-06-26 08:15:25p', 2, '', 'Miju', 'Jang', 203, 'Dosen&rsquo;t have APIKey'),
(21, 'testsocial', '2017-06-26 08:27:34p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', '', 'Jang', 205, 'Dosen&rsquo;t have Name.'),
(22, 'testsocial', '2017-06-26 08:30:24p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', '', 'Jang', 205, 'Dosen&rsquo;t have Name.'),
(23, 'testsocial', '2017-06-26 08:32:07p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, ''),
(24, 'testsocial', '2017-06-26 08:32:22p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, ''),
(25, 'testsocial', '2017-06-26 08:32:30p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jan', 205, 'Dosen&rsquo;t have Name.'),
(26, '', '2017-06-26 08:32:44p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536f', 'Miju', 'Jang', 203, 'Dosen&rsquo;t have APIKey'),
(27, 'testbank', '2017-06-26 08:33:21p', 3, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 206, 'Only Social can get State'),
(28, '', '2017-06-26 08:33:30p', 3, '', '', 'Jang', 203, 'Dosen&rsquo;t have APIKey'),
(29, '', '2017-06-26 08:37:49p', 3, '', '', 'Jang', 203, 'Dosen&rsquo;t have APIKey'),
(30, '', '2017-06-26 08:38:46p', 3, '', '', 'Jang', 203, 'Dosen&rsquo;t have APIKey'),
(31, 'zxcv', '2017-06-26 08:39:05p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(32, 'zxcv', '2017-06-26 08:39:34p', 3, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jang', 100, ''),
(33, 'zxcv', '2017-06-29 04:45:17a', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(34, 'zxcv', '2017-06-29 04:45:42a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', '', '', 100, ''),
(35, 'zxcv', '2017-06-29 04:46:16a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', '', '', 100, ''),
(36, 'zxcv', '2017-06-29 04:54:19a', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(37, 'zxcv', '2017-06-29 04:54:34a', 3, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jang', 100, ''),
(38, '', '2017-06-29 04:56:16a', 4, '', '', '', 301, 'Parameter Error'),
(39, 'zxcv', '2017-06-29 04:57:20a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jang', 100, ''),
(40, 'zxcv', '2017-06-29 04:58:34a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jan', 100, ''),
(41, 'zxcv', '2017-06-29 04:58:50a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jan', 100, ''),
(42, 'zxcv', '2017-06-29 04:59:18a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jan', 100, ''),
(43, 'zxcv', '2017-06-29 05:02:54a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jan', 205, 'Dosen&rsquo;t have Name.'),
(44, 'zxcv', '2017-06-29 05:03:12a', 4, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jang', 100, ''),
(45, 'testsocial', '2017-06-29 05:03:45a', 4, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 207, 'Only Bank can update Credit'),
(46, '', '2017-06-29 05:04:12a', 4, '', '', '', 301, 'Parameter Error'),
(47, '', '2017-06-29 05:06:46a', 3, '', '', '', 301, 'Parameter Error'),
(48, '', '2017-06-29 05:07:08a', 3, '', '', '', 301, 'Parameter Error'),
(49, 'testsocial', '2017-06-29 05:08:26a', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, ''),
(50, '', '2017-06-29 05:08:41a', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536f', 'Miju', 'Jang', 203, 'Dosen&rsquo;t have APIKey'),
(51, 'zxcv', '2017-06-29 05:33:12p', 1, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', NULL, NULL, 100, ''),
(52, 'zxcv', '2017-06-29 05:34:00p', 3, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jang', 100, ''),
(53, 'zxcv', '2017-06-29 05:34:22p', 3, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jan', 205, 'Dosen&rsquo;t have Name.'),
(54, '', '2017-07-01 03:13:34a', 5, '', '', '', 301, 'Parameter Error'),
(55, 'zxcv1', '2017-07-01 03:19:37a', 5, '4f304ee2c28d65ba87dfdeddc0b5c972cafcdcd7fa64d08fe2d7eb69c152d51c', 'Miju', 'Jang', 208, 'Only Shopping can update Product purcharsed'),
(56, 'testShopping', '2017-07-01 03:20:28a', 5, '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'Miju', 'Jang', 100, ''),
(57, 'testShopping', '2017-07-01 03:21:04a', 5, '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'Miju', 'Jang', 100, ''),
(58, 'testbank', '2017-07-01 03:28:21a', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(59, 'testbank', '2017-07-01 03:28:42a', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(60, 'testsocial', '2017-07-01 03:30:57a', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, ''),
(61, 'testsocial', '2017-07-01 03:45:31a', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, ''),
(62, 'testbank', '2017-07-01 03:45:42a', 4, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(63, '', '2017-07-01 03:47:41a', 4, '', '', '', 301, 'Parameter Error'),
(64, 'testShopping', '2017-07-01 03:48:55a', 5, '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'Miju', 'Jang', 100, ''),
(65, 'testbank', '2017-07-01 10:32:37p', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(66, 'testbank', '2017-07-01 10:36:13p', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(67, 'testbank', '2017-07-01 11:31:19p', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(68, 'testbank', '2017-07-02 12:05:25a', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(69, 'testbank', '2017-07-02 02:43:49a', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(70, 'testbank', '2017-07-02 02:44:39a', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(71, 'testsocial', '2017-07-02 03:20:24a', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, ''),
(72, 'testbank', '2017-07-02 03:40:40a', 4, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(73, 'testShopping', '2017-07-02 03:53:50a', 5, '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'Miju', 'Jang', 100, ''),
(74, 'testbank', '2017-07-05 06:04:31p', 1, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', NULL, NULL, 100, ''),
(75, 'testbank', '2017-07-05 06:04:36p', 2, '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'Miju', 'Jang', 100, ''),
(76, 'testsocial', '2017-07-05 06:04:40p', 3, 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'Miju', 'Jang', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'in',
  `birthDay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prod_purchased` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agency` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `queryDate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `sin`, `lastName`, `state`, `birthDay`, `prod_purchased`, `agency`, `queryDate`, `credit`) VALUES
(1, 'Hope', '358 640 555', 'Catron', 'in', '11/28/1972', NULL, NULL, NULL, ''),
(4, 'Glen', '714 000 114', 'King', 'in', '5/30/1989', NULL, NULL, NULL, ''),
(5, 'Wanda', '645 631 037', 'Palacio', 'out', '5/11/1938', NULL, NULL, NULL, ''),
(6, 'Dorothy', '644 768 863', 'Peterson', 'in', '7/24/1989', NULL, NULL, NULL, ''),
(7, 'Rodney', '174 567 313', 'Kilgo', 'in', '1/21/1953', NULL, NULL, NULL, ''),
(8, 'William', '615 605 458', 'Burks', 'in', '4/25/1969', NULL, NULL, NULL, ''),
(9, 'Hao', '547 927 814', 'Wu', 'in', '10/8/1941', NULL, NULL, NULL, ''),
(10, 'Ranjog', '336 019 625', 'Virk', 'in', '10/11/1941', NULL, NULL, NULL, ''),
(11, 'Harinder', '325 417 715', 'Toor', 'in', '6/25/1965', NULL, NULL, NULL, ''),
(12, 'Rupinder', '388 879 041', 'Tiwana', 'in', '5/31/1949', NULL, NULL, NULL, ''),
(13, 'Roman', '178 097 721', 'Sokolov', 'in', '3/22/1964', NULL, NULL, NULL, ''),
(14, 'Tejinder', '006 131 551', 'Singh', 'in', '6/7/1968', NULL, NULL, NULL, ''),
(15, 'Manmeet', '413 091 794', 'Singh', 'in', '6/16/1973', NULL, NULL, NULL, ''),
(16, 'Harmeet', '300 298 916', 'Singh', 'in', '6/25/1966', NULL, NULL, NULL, ''),
(17, 'Ramneet', '170 495 980', 'Shergill', 'in', '8/11/1939', NULL, NULL, NULL, ''),
(18, 'Munish', '206 416 596', 'Saint', 'in', '6/15/1944', NULL, NULL, NULL, ''),
(19, 'Pranath', '289 181 166', 'Reddy', 'in', '11/6/1967', NULL, NULL, NULL, ''),
(20, 'Jaspreet', '025 106 501', 'Rai', 'in', '7/30/1986', NULL, NULL, NULL, ''),
(21, 'Rohan', '390 164 333', 'Patel', 'in', '9/22/1957', NULL, NULL, NULL, ''),
(22, 'Pyosang', '020 738 654', 'Park', 'in', '3/28/1945', NULL, NULL, NULL, ''),
(23, 'Anupriya', '690 640 891', 'Pahwa', 'in', '4/8/1966', NULL, NULL, NULL, ''),
(24, 'Yernar', '008 025 454', 'Murzaliyev', 'in', '1/1/1989', NULL, NULL, NULL, ''),
(25, 'Geenu', '418 865 630', 'Mathai', 'in', '11/5/1995', NULL, NULL, NULL, ''),
(26, 'Vikas', '343 693 586', 'Kumar', 'in', '11/19/1936', NULL, NULL, NULL, ''),
(27, 'Santosh', '583 130 059', 'Konakanchi', 'in', '6/4/1970', NULL, NULL, NULL, ''),
(28, 'Miju', '644 449 712', 'Jang', 'in', '11/25/1935', '60', 'testShopping', '2017-07-02 03:53:50a', 'Good'),
(29, 'Navdip', '166 523 902', 'Dolla', 'in', '7/6/1952', NULL, NULL, NULL, ''),
(30, 'Parasmani', '448 656 942', 'Dhillon', 'in', '1/25/1997', NULL, NULL, NULL, ''),
(31, 'Pierluigi', '095 540 936', 'Stasio', 'in', '1/1/1976', NULL, NULL, NULL, ''),
(32, 'Krupa', '128 783 016', 'Contractor', 'in', '8/8/1985', NULL, NULL, NULL, ''),
(33, 'Andrei', '170 451 835', 'Churkin', 'in', '12/4/1954', NULL, NULL, NULL, ''),
(34, 'Navdeep', '574 624 565', 'Buttar', 'in', '8/23/1997', NULL, NULL, NULL, ''),
(35, 'Nivin', '337 449 748', 'Boss', 'in', '7/30/1939', NULL, NULL, NULL, ''),
(36, 'Jaspreet', '715 406 245', 'Aulakh', 'in', '1/9/1943', NULL, NULL, NULL, ''),
(37, 'Ali', '404 018 756', 'Zahravi', 'in', '10/21/1986', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Log`
--
ALTER TABLE `Log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sin` (`sin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Log`
--
ALTER TABLE `Log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
