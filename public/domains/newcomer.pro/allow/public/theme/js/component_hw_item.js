export const hwItem = {
	props: {
		item: {},
		user: {},
		ratingSystems: {}
	},
	data() {
		return {
			isOpen: false
		}
	},
	computed: {
		ratingSystem() {
			if(!this.ratingSystems.hasOwnProperty(this.item.lesson.field_homework_rating_system)) return null
			return this.ratingSystems[this.item.lesson.field_homework_rating_system]
		},
		ratingSystemName() {
			if(this.ratingSystem) return this.ratingSystem.name
			return ''
		},
		grade() {
			if(!this.ratingSystem) return ''
			if(this.ratingSystem.type == 'select') {
				const ratingSystemItem = this.ratingSystem.items.find(e => e.value == this.item.grade)
				return ratingSystemItem.name ? ratingSystemItem.name : ratingSystemItem.value
			}
			return this.item.grade
		}
	},
	methods: {
		deleteHomeworkItem() {
			this.$emit('delete-item', this.item.id)
		},
		updateHomeworkItem() {
			this.$emit('update-item', this.item)
		}
	},
	template: `
<div class="hw-item" :class="{'hw-item--open': isOpen}">
	<div class="hw-item__header" @click.self="isOpen = !isOpen">
		<div class="hw-item__title"><a :href="item.lesson.path" target="_blank">{{item.lesson.field_header}}</a></div>
		<div class="hw-item__actions" v-if="user.role.name != 'student'">
			<div class="hw-item-status">
				Статус
				<select v-model.number="item.is_checked">
					<option value="0">на проверке</option>
					<option value="1">проверено</option>
				</select>
			</div>
			<div class="hw-item-result" v-if="ratingSystem">
				Результат
				<template v-if="ratingSystem.type == 'select'">
					<select v-model.number="item.grade">
						<option v-for="opt in ratingSystem.items" :value="opt.value">{{opt.name ? opt.name : opt.value}}</option>
					</select>
				</template>
				<template v-if="ratingSystem.type == 'number'">
					<input type="number" v-model.number="item.grade">
				</template>
			</div>
			<button class="mbtn mbtn--size-s mbtn--color-orange" @click.stop="updateHomeworkItem">Сохранить</button>
			<button v-if="user.role.name == 'admin'" class="icon-button icon-button--delete" @click.stop="deleteHomeworkItem">
				<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
					<path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"/>
				</svg>
			</button>
		</div>
		<template v-else>
			<template v-if="item.is_checked == '1'">
				<div class="hw-item__grade">Результат - <b>{{grade}}</b></div>
			</template>
			<template v-else>
				<div class="hw-item__grade">На проверке</div>
			</template>
		</template>
	</div>
	<div class="hw-item__content" v-show="isOpen">
		<div class="hw-item__desc">
			<div class="hw-item__subtitle">Система оценки:
				<span style="color: red;" v-if="!ratingSystemName">Не задана</span>
				<template v-else>{{ratingSystemName}}</template>
			</div>
			<div class="hw-item__subtitle">Описание задания</div>
			{{item.lesson.field_homework_desc}}
		</div>
		<div class="hw-item__solution" v-if="user.role.name != 'student'">
			<div class="hw-item__subtitle">Студент</div>
			{{item.student.field_fullname}}
		</div>
		<div class="hw-item__solution">
			<div class="hw-item__subtitle">Ответ</div>
			{{item.text}}
			<div v-if="item.file">
				Файл: <a target="_blank" :href="'/site/data/documents_user/' + item.file">{{item.file}}</a>
			</div>
		</div>
	</div>
</div>
`
}