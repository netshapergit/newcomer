export const testItem = {
	props: {
		item: {}
	},
	data() {
		return {
			isOpen: false,
			selectedQuestion: null
		}
	},
	watch: {
		'item': {
			deep: true,
			handler(v, oldV) {
				console.log({v, oldV})
				if(!v.question.items.length) {
					this.selectedQuestion = null
				}
				/*
				if(v.items.length !== oldV.items.length) {
					this.selectedQuestion = v[v.length - 1]
				}
				*/
			}
		},
		itemQuestionItemsLength: {
			handler(v, oldV) {
				if(!v) {
					this.selectedQuestion = null
				}
				if(v !== oldV) {
					this.selectedQuestion = this.item.question.items[v - 1]
				}
			}
		}
	},
	computed: {
		itemQuestionItemsLength() {
			return this.item.question.items.length
		},
		maxRate() {
			if(this.item.isNeedCompleteResolve) return this.item.rate
			const answers = this.item.question.items.map(e => e.answers).flat()
			let result = 0
			answers.forEach(e => {
				const variant = this.item.variants.find(v => v.id == e)
				if(variant) result += variant.rate
			})
			return result
		}
	},
	methods: {
		addNewQuestionItem() {
			this.$emit('add-new-question-item')
		},
		addNewVariantToQuestion() {
			const newVariant = {
				id: `${this.item.id}-answer-${Date.now()}`,
				text: '',
				isCorrect: false,
				rate: 1
			}
			this.item.variants.push(newVariant)
		},
		addNewQuestionVariantToTestItem() {
			const newQuestionVariant = {
				id: `${this.item.id}-variant-${Date.now()}`,
				text: '',
				answers: []
			}
			this.item.question.items.push(newQuestionVariant)
		},
		removeItemQuestion(questionId) {
			this.item.question.items = this.item.question.items.filter(e => e.id !== questionId)
		},
		removeItemVariant(variantId) {
			this.item.variants = this.item.variants.filter(e => e.id !== variantId)
		}
	},
	template: `
<div class="page-edit-test-item">
	<div class="page-edit-test-item__title">
		<div class="page-edit-input">
			<label class="page-edit-input__label">Задание</label>
			<input type="text" v-model="item.question.title">
		</div>
		<button @click.stop="$emit('delete-item', item.id)" class="icon-button icon-button--delete">
			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"></path></svg>
		</button>
	</div>
	<div class="page-edit-test-item__options">
		<div class="page-edit-switch page-edit-switch--always">
			<input type="checkbox" v-model="item.isNeedCompleteResolve" :id="item.id + '-rate-mode'">
			<label class="page-edit-switch__label" :for="item.id + '-rate-mode'">
				Учитывать каждый ответ
				<div class="page-edit-switch__switcher"></div>
				Учитывать полное решение
			</label>
		</div>
		<div class="page-edit-input" v-show="item.isNeedCompleteResolve">
			<label class="page-edit-input__label">Баллы за полное решение</label>
			<input type="number" v-model.number="item.rate">
		</div>
	</div>
	<div class="page-edit-test-item__questions">
		<div class="page-edit-test-item__question" v-for="question in item.question.items">
			<button class="mbtn mbtn--color-orange"
				:class="{'mbtn--color-grey': selectedQuestion != question}"
				@click.stop="selectedQuestion = question"
			>
				<template v-if="selectedQuestion == question"> 
					Выбрано
				</template>
				<template v-else>
					Выбрать
				</template>
			</button>
			<div class="page-edit-input">
				<label class="page-edit-input__label">
					Вопрос
					<span v-if="!question.answers.length" class="page-edit-input__label-message page-edit-input__label-message--error">
						Не выбраны ответы
					</span>
				</label>
				<input type="text" v-model="question.text">
			</div>
			<div>
				<button @click.stop="removeItemQuestion(question.id)" class="icon-button icon-button--delete">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"></path></svg>
				</button>
			</div>
		</div>
		<button class="mbtn mbtn--color-orange" @click.stop="addNewQuestionVariantToTestItem(item)">Добавить вопрос</button>
	</div>
	<div class="page-edit-test-item__variants">
		<template v-if="selectedQuestion !== null">
			Выберите ответы для "{{ selectedQuestion.text }}" <br><br>
		</template>
		<div class="page-edit-test-item__variants-list">
			<div class="page-edit-test-item__variant" v-for="v in item.variants">
				<div>
				<template v-if="selectedQuestion !== null">
					<input type="checkbox" v-model="selectedQuestion.answers" :value="v.id" :id="'question-' + item.id + '-variant-' + v.id">
					<label :for="'question-' + item.id + '-variant-' + v.id">
						Верный ответ
					</label>		
				</template>
				</div>
				<div class="page-edit-input">
					<label class="page-edit-input__label">Текст</label>
					<input type="text" v-model="v.text">
				</div>
				<div class="page-edit-input">
					<label class="page-edit-input__label">Баллы</label>
					<input type="number" v-model.number="v.rate">
				</div>
				<button @click.stop="removeItemVariant(v.id)" class="icon-button icon-button--delete">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"></path></svg>
				</button>
			</div>
		</div>
		<div class="page-edit-test-item__variants-new">
			<button class="mbtn mbtn--color-orange" @click.stop="addNewVariantToQuestion(item)">Добавить вариант ответа</button>
		</div>
	</div>
	<div class="page-edit-test-item__summary">
		Максимальный балл за решение - {{maxRate}}
	</div>
</div>
`
}