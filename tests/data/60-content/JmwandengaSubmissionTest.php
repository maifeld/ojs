<?php

/**
 * @file tests/data/60-content/JmwandengaSubmissionTest.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2000-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class JmwandengaSubmissionTest
 * @ingroup tests_data
 *
 * @brief Data build suite: Create submission
 */

import('tests.data.ContentBaseTestCase');

class JmwandengaSubmissionTest extends ContentBaseTestCase {
	/**
	 * Create a submission.
	 */
	function testSubmission() {
		$this->register(array(
			'username' => 'jmwandenga',
			'firstName' => 'John',
			'lastName' => 'Mwandenga',
			'affiliation' => 'University of Cape Town',
			'country' => 'South Africa',
			'roles' => array('Author'),
		));

		$this->createSubmission(array(
			'title' => 'Signalling Theory Dividends: A Review Of The Literature And Empirical Evidence',
			'abstract' => 'The signaling theory suggests that dividends signal future prospects of a firm. However, recent empirical evidence from the US and the Uk does not offer a conclusive evidence on this issue. There are conflicting policy implications among financial economists so much that there is no practical dividend policy guidance to management, existing and potential investors in shareholding. Since corporate investment, financing and distribution decisions are a continuous function of management, the dividend decisions seem to rely on intuitive evaluation.',
		));

		$this->logOut();
	}
}