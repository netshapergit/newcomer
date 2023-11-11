export const faqItem = {
	props: {
		item: {}
	},
	data() {
		return {
			isOpen: false
		}
	},
	template: `
<div class="faq-item" :class="{'faq-item--open': isOpen}">
	<div class="faq-item__title" @click.stop="isOpen = !isOpen">{{ item.question }}</div>
	<div class="faq-item__content" v-show="isOpen">
		{{ item.answer }}
	</div>
</div>
`
}