<?php
class Comment {

	public $commentSaltiness;

	public $commentText;

	public $commentUsername;

	public function __construct($commentSaltines , $commentText, $commentUsername) {
		try {
			$this->commentSaltiness($commentSaltines);
			$this->commentText($commentText);
			$this->commentUsername($commentUsername);
		}
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * @return mixed
	 */
	public function getCommentSaltiness() :float {
		return $this->commentSaltiness;
	}

	/**
	 * @param mixed $commentSaltiness
	 */
	public function setCommentSaltiness($commentSaltiness) {
		$this->commentSaltiness = $commentSaltiness;
	}

	/**
	 * @return mixed
	 */
	public function getCommentText() :string {
		return $this->commentText;
	}

	/**
	 * @param mixed $commentText
	 */
	public function setCommentText($commentText) {
		$this->commentText = $commentText;
	}

	/**
	 * @return mixed
	 */
	public function getCommentUsername() : string {
		return $this->commentUsername;
	}

	/**
	 * @param mixed $commentUsername
	 */
	public function setCommentUsername($commentUsername) {
		$this->commentUsername = $commentUsername;
	}

}

 $superSalty = new Comment(0.8888998, 'ya dummy', '@captainRando');

echo var_dump($superSalty);