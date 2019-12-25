-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2019 at 10:41 
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link-net`
--

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE IF NOT EXISTS `node` (
  `regional` varchar(50) NOT NULL,
  `hub_name` varchar(255) NOT NULL,
  `node_id` varchar(50) NOT NULL,
  `node_des` varchar(255) NOT NULL,
  `titik_ko` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`regional`, `hub_name`, `node_id`, `node_des`, `titik_ko`) VALUES
('001', '001', '001', '001', '001'),
('002', '002', '002', '002', '002');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE IF NOT EXISTS `pimpinan` (
  `node_id` varchar(255) NOT NULL,
  `node_des` varchar(255) NOT NULL,
  `hub_name` varchar(255) NOT NULL,
  `optical_light_rx` varchar(255) NOT NULL,
  `optical_input_node` varchar(255) NOT NULL,
  `tgl_lap` varchar(20) NOT NULL,
  `jam_lap` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`node_id`, `node_des`, `hub_name`, `optical_light_rx`, `optical_input_node`, `tgl_lap`, `jam_lap`, `kondisi`) VALUES
('001', '001', '001', '1', '1', '25-12-2019', '02:38:22', 'Approve'),
('002', '002', '002', '1', '002', '25-12-2019', '02:45:03', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `t_coaxial`
--

CREATE TABLE IF NOT EXISTS `t_coaxial` (
  `node_id` varchar(255) NOT NULL,
  `node_des` varchar(255) NOT NULL,
  `regional` varchar(255) NOT NULL,
  `hub_name` varchar(255) NOT NULL,
  `optical_input_node` varchar(255) NOT NULL,
  `optical_ac` varchar(255) NOT NULL,
  `optical_dc` varchar(255) NOT NULL,
  `signal_input_low` varchar(255) NOT NULL,
  `signal_input_high` varchar(255) NOT NULL,
  `signal_output_low` varchar(255) NOT NULL,
  `signal_output_high` varchar(255) NOT NULL,
  `signal_output_rev` varchar(255) NOT NULL,
  `docsis_dp` varchar(255) NOT NULL,
  `docsis_up` varchar(255) NOT NULL,
  `docsis_ds` varchar(255) NOT NULL,
  `quality_ber` varchar(255) NOT NULL,
  `quality_mer` varchar(255) NOT NULL,
  `quality_cn` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_coaxial`
--

INSERT INTO `t_coaxial` (`node_id`, `node_des`, `regional`, `hub_name`, `optical_input_node`, `optical_ac`, `optical_dc`, `signal_input_low`, `signal_input_high`, `signal_output_low`, `signal_output_high`, `signal_output_rev`, `docsis_dp`, `docsis_up`, `docsis_ds`, `quality_ber`, `quality_mer`, `quality_cn`, `pic`, `kondisi`) VALUES
('001', '001', '001', '001', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Sudah dikonfirmasi'),
('002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', '002', 'Sudah dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `t_fo`
--

CREATE TABLE IF NOT EXISTS `t_fo` (
  `tgl` varchar(15) NOT NULL,
  `node_id` varchar(255) NOT NULL,
  `node_des` varchar(255) NOT NULL,
  `regional` varchar(255) NOT NULL,
  `hub_name` varchar(255) NOT NULL,
  `rack` varchar(255) NOT NULL,
  `jarak_normal` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_fo`
--

INSERT INTO `t_fo` (`tgl`, `node_id`, `node_des`, `regional`, `hub_name`, `rack`, `jarak_normal`, `pic`, `kondisi`) VALUES
('25-12-2019', '001', '001', '001', '001', '12', '1', '1', 'setuju'),
('25-12-2019', '002', '002', '002', '002', '002', '002', '1', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `t_hub`
--

CREATE TABLE IF NOT EXISTS `t_hub` (
  `node_id` varchar(255) NOT NULL,
  `node_des` varchar(255) NOT NULL,
  `regional` varchar(255) NOT NULL,
  `hub_name` varchar(255) NOT NULL,
  `optical_light_tx` varchar(255) NOT NULL,
  `optical_light_rx` varchar(255) NOT NULL,
  `receiver_no` varchar(255) NOT NULL,
  `receiver_loss` varchar(255) NOT NULL,
  `transmitter_no` varchar(255) NOT NULL,
  `transmitter_persen` varchar(255) NOT NULL,
  `signal_trans_low` varchar(255) NOT NULL,
  `signal_trans_high` varchar(255) NOT NULL,
  `signal_trans_dl` varchar(255) NOT NULL,
  `cmts_no` varchar(255) NOT NULL,
  `cmts_ds` varchar(255) NOT NULL,
  `cmts_us` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_hub`
--

INSERT INTO `t_hub` (`node_id`, `node_des`, `regional`, `hub_name`, `optical_light_tx`, `optical_light_rx`, `receiver_no`, `receiver_loss`, `transmitter_no`, `transmitter_persen`, `signal_trans_low`, `signal_trans_high`, `signal_trans_dl`, `cmts_no`, `cmts_ds`, `cmts_us`, `pic`, `kondisi`) VALUES
('001', '001', '001', '001', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Sudah di Input'),
('002', '002', '002', '002', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Sudah di Input');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(13, 'fo', 'eed807024939b808083f0031a56e9872', 'tek-fo'),
(14, 'hub', '5261539cab7de0487b6b41415acc7f61', 'tek-hub'),
(15, 'coaxial', '226dce80b88cf7b4bd4138c4a10c3ee7', 'tek-coaxial'),
(16, 'bos', '15fc4a53992beba40ae91e5244e79dff', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`regional`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`node_id`);

--
-- Indexes for table `t_coaxial`
--
ALTER TABLE `t_coaxial`
  ADD PRIMARY KEY (`node_id`);

--
-- Indexes for table `t_fo`
--
ALTER TABLE `t_fo`
  ADD PRIMARY KEY (`node_id`);

--
-- Indexes for table `t_hub`
--
ALTER TABLE `t_hub`
  ADD PRIMARY KEY (`node_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
