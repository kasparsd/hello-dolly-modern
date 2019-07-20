<?php

class TestHelloDolly extends WP_Mock\Tools\TestCase {

	public function test_hello_dolly_get_lyric() {
		WP_Mock::userFunction( 'wptexturize', array(
			'times' => 1,
			'return' => 'This is a quote'
		) );

		$this->assertEquals(
			'This is a quote',
			hello_dolly_get_lyric(),
			'Can get a line of lyrics'
		);
	}

	public function test_hello_dolly() {
		WP_Mock::userFunction( 'wptexturize', array(
			'times' => 1,
			'return' => 'This is a line from the lyrics'
		) );

		WP_Mock::userFunction( 'get_user_locale', array(
			'times' => 1,
			'return' => 'lv_LV'
		) );

		ob_start();
		hello_dolly();
		$output = ob_get_clean();

		$this->assertContains( 'This is a line from the lyrics', $output );
		$this->assertContains( 'Quote from Hello Dolly song, by Jerry Herman:', $output );
		$this->assertContains( 'lang="en"', $output );
	}
}
