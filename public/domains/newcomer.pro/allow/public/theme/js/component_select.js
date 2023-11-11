export const selectInput = {
	props: {
		items: {},
		selectedItems: {},
		textField: {},
		title: {}
	},
	data() {
		return {
			isOpen: false
		}
	},
	computed: {
		
	},
	methods: {
		setItem(itemId) {
			this.$emit('set-item', itemId)
		}
	},
	template: `
<div class="filter-select" :class="{'filter-select--open': isOpen}">
	<div class="filter-select__trigger" @click.self="isOpen = !isOpen">
		{{title}}
		<span v-if="selectedItems.length">{{selectedItems.length}}</span>
	</div>
	<div class="filter-select__items">
		<div class="filter-select__item" 
			@click.stop="setItem(item.id)" 
			v-for="item in items" 
			:key="item.id"
			:class="{'filter-select__item--selected': selectedItems.includes(item.id)}"
		>
			{{item[textField]}}
		</div>
	</div>
</div>
`
}