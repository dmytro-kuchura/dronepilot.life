import {createStore} from "redux";
import rootReducer from "./reducers/root-reducer";

function configureStore(state = {bgState: {bgColor: "black"}, activeState: {activeColor: "info"}}) {
    return createStore(rootReducer, state);
}

export default configureStore;
