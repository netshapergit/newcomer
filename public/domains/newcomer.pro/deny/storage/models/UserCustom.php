<?php

class UserCustom extends Member {

							public function fieldRole()
							{
								return $this->belongsTo('Option');
							}
						
}
