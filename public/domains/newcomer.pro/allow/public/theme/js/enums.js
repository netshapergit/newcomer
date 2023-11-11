export const RATING_SYSTEMS = {
	'2': {
		items: [{value: 0, name: 'незачет'}, {value: 1, name: 'зачет'}],
		name: 'Зачет/Незачет',
		type: 'select'
	},
	'5': {
		items: [{value: 0}, {value: 1}, {value: 2}, {value: 3}, {value: 4}, {value: 5}],
		name: 'Пятибальная',
		type: 'select'
	},
	'100': {
		items: [],
		name: 'Стобальная',
		type: 'number'
	}
}

export const ROLES = [
	{id: '8', name: 'admin', name_ru: 'Администратор'},
	{id: '9', name: 'teacher', name_ru: 'Преподаватель'},
	{id: '10', name: 'student', name_ru: 'Студент'}
]