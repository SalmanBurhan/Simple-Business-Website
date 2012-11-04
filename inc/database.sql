--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `title` text NOT NULL,
  `header` text NOT NULL,
  `subheader` text NOT NULL,
  `description` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

