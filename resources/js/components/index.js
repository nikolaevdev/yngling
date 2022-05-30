import Vue from 'vue'
import Child from './Child.vue'
import Button from './Button.vue'
import Checkbox from './Checkbox.vue'
import { HasError, AlertError, AlertSuccess } from 'vform/components/bootstrap5'

// Components that are registered globaly.
[
  Child,
  Button,
  Checkbox,
  HasError,
  AlertError,
  AlertSuccess
].forEach(Component => {
  Vue.component(Component.name, Component)
})