<?php
class Comment {

	public $commentSaltiness;

	public $commentText;

	public $commentUsername;

	/**
	 * @return mixed
	 */
	public function getCommentSaltiness() {
		return $this->commentSaltiness;
	}

	/**
	 * @param mixed $commentSaltiness
	 */
	public function setCommentSaltiness($commentSaltiness) : float {
		$this->commentSaltiness = $commentSaltiness;
	}

	/**
	 * @return mixed
	 */
	public function getCommentText() {
		return $this->commentText;
	}

	/**
	 * @param mixed $commentText
	 */
	public function setCommentText($commentText) : string {
		$this->commentText = $commentText;
	}

	/**
	 * @return mixed
	 */
	public function getCommentUsername() {
		return $this->commentUsername;
	}

	/**
	 * @param mixed $commentUsername
	 */
	public function setCommentUsername($commentUsername) : string {
		$this->commentUsername = $commentUsername;
	}

	public function __construct($args = []) {
		try {
			$this->commentSaltiness = ['0'];
			$this->commentText = ['empty string!'];
			$this->commentUsername = ['captain Random'];
		}
			catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
}