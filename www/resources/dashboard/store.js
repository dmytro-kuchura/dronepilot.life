import {createStore} from "redux";
import rootReducer from "./reducers/root-reducer";

function configureStore(state = {}) {
    return createStore(rootReducer, state);
}

export default configureStore;
