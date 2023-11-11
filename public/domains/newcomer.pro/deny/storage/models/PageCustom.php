<?php

class PageCustom extends Model {

							public function fieldProgramsCourses()
							{
								return $this->belongsToMany(
								'Page',
								'v_es__ru$_page_page_field_programs_courses',
								'owner_page_id',
								'page_id'
							);
							}
						
							public function fieldCoursesLessons()
							{
								return $this->belongsToMany(
								'Page',
								'v_es__ru$_page_page_field_courses_lessons',
								'owner_page_id',
								'page_id'
							);
							}
						
}
